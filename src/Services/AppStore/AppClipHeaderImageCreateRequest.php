<?php

/**
 * MIT License
 * 
 * Copyright (c) 2023 Long Pham
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
*/

namespace Mantix\AppStoreConnect\Services\AppStore;

class AppClipHeaderImageCreateRequest_Data_Attributes extends \Mantix\AppStoreConnect\Model
{
	public $fileSize;
	public $fileName;

	public function getFileSize()
	{
		return $this->fileSize;
	}
	public function setFileSize($fileSize)
	{
		$this->fileSize = $fileSize;
		return $this;
	}
	public function getFileName()
	{
		return $this->fileName;
	}
	public function setFileName($fileName)
	{
		$this->fileName = $fileName;
		return $this;
	}

}

class AppClipHeaderImageCreateRequest_Data_Relationships_AppClipDefaultExperienceLocalization_Data extends \Mantix\AppStoreConnect\Model
{
	public $type = 'appClipDefaultExperienceLocalizations';
	public $id;

	public function getType()
	{
		return $this->type;
	}
	public function setType($type)
	{
		$this->type = $type;
		return $this;
	}
	public function getId()
	{
		return $this->id;
	}
	public function setId($id)
	{
		$this->id = $id;
		return $this;
	}

}

class AppClipHeaderImageCreateRequest_Data_Relationships_AppClipDefaultExperienceLocalization extends \Mantix\AppStoreConnect\Model
{
	protected $dataType = AppClipHeaderImageCreateRequest_Data_Relationships_AppClipDefaultExperienceLocalization_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppClipHeaderImageCreateRequest_Data_Relationships_AppClipDefaultExperienceLocalization_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppClipHeaderImageCreateRequest_Data_Relationships_AppClipDefaultExperienceLocalization_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class AppClipHeaderImageCreateRequest_Data_Relationships extends \Mantix\AppStoreConnect\Model
{
	protected $appClipDefaultExperienceLocalizationType = AppClipHeaderImageCreateRequest_Data_Relationships_AppClipDefaultExperienceLocalization::class;
	protected $appClipDefaultExperienceLocalizationDataType = 'object';

	/**
	* @return  AppClipHeaderImageCreateRequest_Data_Relationships_AppClipDefaultExperienceLocalization
	*/
	public function getAppClipDefaultExperienceLocalization()
	{
		return $this->appClipDefaultExperienceLocalization;
	}
	/**
	* @param  AppClipHeaderImageCreateRequest_Data_Relationships_AppClipDefaultExperienceLocalization
	*/
	public function setAppClipDefaultExperienceLocalization($appClipDefaultExperienceLocalization)
	{
		$this->appClipDefaultExperienceLocalization = $appClipDefaultExperienceLocalization;
		return $this;
	}

}

class AppClipHeaderImageCreateRequest_Data extends \Mantix\AppStoreConnect\Model
{
	public $type = 'appClipHeaderImages';
	protected $attributesType = AppClipHeaderImageCreateRequest_Data_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = AppClipHeaderImageCreateRequest_Data_Relationships::class;
	protected $relationshipsDataType = 'object';

	public function getType()
	{
		return $this->type;
	}
	public function setType($type)
	{
		$this->type = $type;
		return $this;
	}
	/**
	* @return  AppClipHeaderImageCreateRequest_Data_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  AppClipHeaderImageCreateRequest_Data_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  AppClipHeaderImageCreateRequest_Data_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  AppClipHeaderImageCreateRequest_Data_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $this;
	}

}

class AppClipHeaderImageCreateRequest extends \Mantix\AppStoreConnect\Model
{
	protected $dataType = AppClipHeaderImageCreateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppClipHeaderImageCreateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppClipHeaderImageCreateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

