<?php
namespace Lib\RedBean\Plugin;

use Lib\RedBean\Plugin\GUMP as GUMP;

class ModelValidation implements \Lib\RedBean\Plugin
{
    public static function validate(\Lib\RedBean\OODBBean $bean)
    {
        $data = $bean->export();
        $model = $bean->box() !== null ? $bean->box() : null;

        if ( ! $model )
        {
            throw new ModelValidation_Exception('This bean does not have a model!');
        }

        $rules = isset($model::$rules) ? $model::$rules : null;

        if ( ! $rules )
        {
            throw new ModelValidation_Exception('This bean does not have any established rules!');
        }

        $validations = [];
        $filters = [];
        $labels = [];
        $messages = [];

        foreach ($rules as $field => $rule)
        {
            if (isset($rule['filter']))
            {
                $filters[$field] = $rule['filter'];
            }

            if (isset($rule['label']))
            {
                $labels[$field] = $rule['label'];
            }

            if (isset($rule['validation']))
            {
                $validations[$field] = $rule['validation'];
            }

            if (isset($rule['message']))
            {
                $field = isset($rule['label']) ? $rule['label'] : ucwords(str_replace(array('_', '-'), chr(32), $field));
                $messages[$field] = $rule['message'];
            }
        }

        $gump = new GUMP();

        if ( ! empty($filters))
        {
            $gump->filter_rules($filters);
        }

        if ( ! empty($validations))
        {
            $gump->validation_rules($validations);
        }

        if ( ! empty($labels))
        {
            $gump->set_field_names($labels);
        }

        $validated_data = $gump->run($data);

        if($validated_data === false)
        {
            return self::default2custom_errors($gump->get_errors_array(), $messages);
        }
        else
        {
            $bean->import($validated_data);
            return true;
        }
    }

    private static function default2custom_errors($default, $custom)
    {
        // Replace default error messages with our custom ones
        $with_custom_errors = array_merge($default, $custom);
        // Get the fields that we do not need
        $delete = array_diff_key($with_custom_errors, $default);
        // Delete the fields that we do not need from our custom errors
        $errors = array_diff($with_custom_errors, $delete);
        return $errors;
    }
}

class ModelValidation_Exception extends \Exception {}