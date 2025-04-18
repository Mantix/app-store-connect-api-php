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

class SubscriptionPricePoint_Attributes extends \Mantix\AppStoreConnect\Model
{
	public $customerPrice;
	public $proceeds;
	public $proceedsYear2;

	public function getCustomerPrice()
	{
		return $this->customerPrice;
	}
	public function setCustomerPrice($customerPrice)
	{
		$this->customerPrice = $customerPrice;
		return $this;
	}
	public function getProceeds()
	{
		return $this->proceeds;
	}
	public function setProceeds($proceeds)
	{
		$this->proceeds = $proceeds;
		return $this;
	}
	public function getProceedsYear2()
	{
		return $this->proceedsYear2;
	}
	public function setProceedsYear2($proceedsYear2)
	{
		$this->proceedsYear2 = $proceedsYear2;
		return $this;
	}

}

class SubscriptionPricePoint_Relationships_Territory_Links extends \Mantix\AppStoreConnect\Model
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

class SubscriptionPricePoint_Relationships_Territory_Data extends \Mantix\AppStoreConnect\Model
{
	public $type = 'territories';
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

class SubscriptionPricePoint_Relationships_Territory extends \Mantix\AppStoreConnect\Model
{
	protected $linksType = SubscriptionPricePoint_Relationships_Territory_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = SubscriptionPricePoint_Relationships_Territory_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  SubscriptionPricePoint_Relationships_Territory_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  SubscriptionPricePoint_Relationships_Territory_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  SubscriptionPricePoint_Relationships_Territory_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  SubscriptionPricePoint_Relationships_Territory_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class SubscriptionPricePoint_Relationships extends \Mantix\AppStoreConnect\Model
{
	protected $territoryType = SubscriptionPricePoint_Relationships_Territory::class;
	protected $territoryDataType = 'object';

	/**
	* @return  SubscriptionPricePoint_Relationships_Territory
	*/
	public function getTerritory()
	{
		return $this->territory;
	}
	/**
	* @param  SubscriptionPricePoint_Relationships_Territory
	*/
	public function setTerritory($territory)
	{
		$this->territory = $territory;
		return $this;
	}

}

class SubscriptionPricePoint extends \Mantix\AppStoreConnect\Model
{
	public $type = 'subscriptionPricePoints';
	public $id;
	protected $attributesType = SubscriptionPricePoint_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = SubscriptionPricePoint_Relationships::class;
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
	* @return  SubscriptionPricePoint_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  SubscriptionPricePoint_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  SubscriptionPricePoint_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  SubscriptionPricePoint_Relationships
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

