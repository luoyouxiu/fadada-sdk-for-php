<?php
namespace LuoYouXiu\FadadaSdkForPhp\Bean\req\appTemplate\appField;

class AppFieldCreateReq
{
    public $fieldKey;

    public $fieldName;

    public $fieldType;

    /**
     * @return mixed
     */
    public function getFieldKey()
    {
        return $this->fieldKey;
    }

    /**
     * @param mixed $fieldKey
     */
    public function setFieldKey($fieldKey)
    {
        $this->fieldKey = $fieldKey;
    }

    /**
     * @return mixed
     */
    public function getFieldName()
    {
        return $this->fieldName;
    }

    /**
     * @param mixed $fieldName
     */
    public function setFieldName($fieldName)
    {
        $this->fieldName = $fieldName;
    }

    /**
     * @return mixed
     */
    public function getFieldType()
    {
        return $this->fieldType;
    }

    /**
     * @param mixed $fieldType
     */
    public function setFieldType($fieldType)
    {
        $this->fieldType = $fieldType;
    }

}
