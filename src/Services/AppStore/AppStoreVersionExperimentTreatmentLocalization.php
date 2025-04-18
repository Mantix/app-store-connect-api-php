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

class AppStoreVersionExperimentTreatmentLocalization_Attributes extends \Mantix\AppStoreConnect\Model
{
	public $locale;

	public function getLocale()
	{
		return $this->locale;
	}
	public function setLocale($locale)
	{
		$this->locale = $locale;
		return $this;
	}

}

class AppStoreVersionExperimentTreatmentLocalization_Relationships_AppStoreVersionExperimentTreatment_Links extends \Mantix\AppStoreConnect\Model
{
	public $self;
	public $related;

	public function getSelf()
	{
		return $this->self;
	}
	public function setSelf($self)
	{
		$this->self = $self;
		return $this;
	}
	public function getRelated()
	{
		return $this->related;
	}
	public function setRelated($related)
	{
		$this->related = $related;
		return $this;
	}

}

class AppStoreVersionExperimentTreatmentLocalization_Relationships_AppStoreVersionExperimentTreatment_Data extends \Mantix\AppStoreConnect\Model
{
	public $type = 'appStoreVersionExperimentTreatments';
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

class AppStoreVersionExperimentTreatmentLocalization_Relationships_AppStoreVersionExperimentTreatment extends \Mantix\AppStoreConnect\Model
{
	protected $linksType = AppStoreVersionExperimentTreatmentLocalization_Relationships_AppStoreVersionExperimentTreatment_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = AppStoreVersionExperimentTreatmentLocalization_Relationships_AppStoreVersionExperimentTreatment_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppStoreVersionExperimentTreatmentLocalization_Relationships_AppStoreVersionExperimentTreatment_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppStoreVersionExperimentTreatmentLocalization_Relationships_AppStoreVersionExperimentTreatment_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  AppStoreVersionExperimentTreatmentLocalization_Relationships_AppStoreVersionExperimentTreatment_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppStoreVersionExperimentTreatmentLocalization_Relationships_AppStoreVersionExperimentTreatment_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class AppStoreVersionExperimentTreatmentLocalization_Relationships_AppScreenshotSets_Links extends \Mantix\AppStoreConnect\Model
{
	public $self;
	public $related;

	public function getSelf()
	{
		return $this->self;
	}
	public function setSelf($self)
	{
		$this->self = $self;
		return $this;
	}
	public function getRelated()
	{
		return $this->related;
	}
	public function setRelated($related)
	{
		$this->related = $related;
		return $this;
	}

}

class AppStoreVersionExperimentTreatmentLocalization_Relationships_AppScreenshotSets_Data extends \Mantix\AppStoreConnect\Model
{
	public $type = 'appScreenshotSets';
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

class AppStoreVersionExperimentTreatmentLocalization_Relationships_AppScreenshotSets extends \Mantix\AppStoreConnect\Model
{
	protected $linksType = AppStoreVersionExperimentTreatmentLocalization_Relationships_AppScreenshotSets_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = AppStoreVersionExperimentTreatmentLocalization_Relationships_AppScreenshotSets_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  AppStoreVersionExperimentTreatmentLocalization_Relationships_AppScreenshotSets_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppStoreVersionExperimentTreatmentLocalization_Relationships_AppScreenshotSets_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  PagingInformation
	*/
	public function getMeta()
	{
		return $this->meta;
	}
	/**
	* @param  PagingInformation
	*/
	public function setMeta($meta)
	{
		$this->meta = $meta;
		return $this;
	}
	/**
	* @return  AppStoreVersionExperimentTreatmentLocalization_Relationships_AppScreenshotSets_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppStoreVersionExperimentTreatmentLocalization_Relationships_AppScreenshotSets_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class AppStoreVersionExperimentTreatmentLocalization_Relationships_AppPreviewSets_Links extends \Mantix\AppStoreConnect\Model
{
	public $self;
	public $related;

	public function getSelf()
	{
		return $this->self;
	}
	public function setSelf($self)
	{
		$this->self = $self;
		return $this;
	}
	public function getRelated()
	{
		return $this->related;
	}
	public function setRelated($related)
	{
		$this->related = $related;
		return $this;
	}

}

class AppStoreVersionExperimentTreatmentLocalization_Relationships_AppPreviewSets_Data extends \Mantix\AppStoreConnect\Model
{
	public $type = 'appPreviewSets';
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

class AppStoreVersionExperimentTreatmentLocalization_Relationships_AppPreviewSets extends \Mantix\AppStoreConnect\Model
{
	protected $linksType = AppStoreVersionExperimentTreatmentLocalization_Relationships_AppPreviewSets_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = AppStoreVersionExperimentTreatmentLocalization_Relationships_AppPreviewSets_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  AppStoreVersionExperimentTreatmentLocalization_Relationships_AppPreviewSets_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppStoreVersionExperimentTreatmentLocalization_Relationships_AppPreviewSets_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  PagingInformation
	*/
	public function getMeta()
	{
		return $this->meta;
	}
	/**
	* @param  PagingInformation
	*/
	public function setMeta($meta)
	{
		$this->meta = $meta;
		return $this;
	}
	/**
	* @return  AppStoreVersionExperimentTreatmentLocalization_Relationships_AppPreviewSets_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppStoreVersionExperimentTreatmentLocalization_Relationships_AppPreviewSets_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class AppStoreVersionExperimentTreatmentLocalization_Relationships extends \Mantix\AppStoreConnect\Model
{
	protected $appStoreVersionExperimentTreatmentType = AppStoreVersionExperimentTreatmentLocalization_Relationships_AppStoreVersionExperimentTreatment::class;
	protected $appStoreVersionExperimentTreatmentDataType = 'object';
	protected $appScreenshotSetsType = AppStoreVersionExperimentTreatmentLocalization_Relationships_AppScreenshotSets::class;
	protected $appScreenshotSetsDataType = 'object';
	protected $appPreviewSetsType = AppStoreVersionExperimentTreatmentLocalization_Relationships_AppPreviewSets::class;
	protected $appPreviewSetsDataType = 'object';

	/**
	* @return  AppStoreVersionExperimentTreatmentLocalization_Relationships_AppStoreVersionExperimentTreatment
	*/
	public function getAppStoreVersionExperimentTreatment()
	{
		return $this->appStoreVersionExperimentTreatment;
	}
	/**
	* @param  AppStoreVersionExperimentTreatmentLocalization_Relationships_AppStoreVersionExperimentTreatment
	*/
	public function setAppStoreVersionExperimentTreatment($appStoreVersionExperimentTreatment)
	{
		$this->appStoreVersionExperimentTreatment = $appStoreVersionExperimentTreatment;
		return $this;
	}
	/**
	* @return  AppStoreVersionExperimentTreatmentLocalization_Relationships_AppScreenshotSets
	*/
	public function getAppScreenshotSets()
	{
		return $this->appScreenshotSets;
	}
	/**
	* @param  AppStoreVersionExperimentTreatmentLocalization_Relationships_AppScreenshotSets
	*/
	public function setAppScreenshotSets($appScreenshotSets)
	{
		$this->appScreenshotSets = $appScreenshotSets;
		return $this;
	}
	/**
	* @return  AppStoreVersionExperimentTreatmentLocalization_Relationships_AppPreviewSets
	*/
	public function getAppPreviewSets()
	{
		return $this->appPreviewSets;
	}
	/**
	* @param  AppStoreVersionExperimentTreatmentLocalization_Relationships_AppPreviewSets
	*/
	public function setAppPreviewSets($appPreviewSets)
	{
		$this->appPreviewSets = $appPreviewSets;
		return $this;
	}

}

class AppStoreVersionExperimentTreatmentLocalization extends \Mantix\AppStoreConnect\Model
{
	public $type = 'appStoreVersionExperimentTreatmentLocalizations';
	public $id;
	protected $attributesType = AppStoreVersionExperimentTreatmentLocalization_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = AppStoreVersionExperimentTreatmentLocalization_Relationships::class;
	protected $relationshipsDataType = 'object';
	protected $linksType = ResourceLinks::class;
	protected $linksDataType = '';

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
	/**
	* @return  AppStoreVersionExperimentTreatmentLocalization_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  AppStoreVersionExperimentTreatmentLocalization_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  AppStoreVersionExperimentTreatmentLocalization_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  AppStoreVersionExperimentTreatmentLocalization_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $this;
	}
	/**
	* @return  ResourceLinks
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  ResourceLinks
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}

}

