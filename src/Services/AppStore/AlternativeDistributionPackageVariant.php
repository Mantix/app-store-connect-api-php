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

class AlternativeDistributionPackageVariant_Attributes extends \Mantix\AppStoreConnect\Model
{
	public $url;
	public $urlExpirationDate;
	public $alternativeDistributionKeyBlob;
	public $fileChecksum;

	public function getUrl()
	{
		return $this->url;
	}
	public function setUrl($url)
	{
		$this->url = $url;
		return $this;
	}
	public function getUrlExpirationDate()
	{
		return $this->urlExpirationDate;
	}
	public function setUrlExpirationDate($urlExpirationDate)
	{
		$this->urlExpirationDate = $urlExpirationDate;
		return $this;
	}
	public function getAlternativeDistributionKeyBlob()
	{
		return $this->alternativeDistributionKeyBlob;
	}
	public function setAlternativeDistributionKeyBlob($alternativeDistributionKeyBlob)
	{
		$this->alternativeDistributionKeyBlob = $alternativeDistributionKeyBlob;
		return $this;
	}
	public function getFileChecksum()
	{
		return $this->fileChecksum;
	}
	public function setFileChecksum($fileChecksum)
	{
		$this->fileChecksum = $fileChecksum;
		return $this;
	}

}

class AlternativeDistributionPackageVariant extends \Mantix\AppStoreConnect\Model
{
	public $type = 'alternativeDistributionPackageVariants';
	public $id;
	protected $attributesType = AlternativeDistributionPackageVariant_Attributes::class;
	protected $attributesDataType = 'object';
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
	* @return  AlternativeDistributionPackageVariant_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  AlternativeDistributionPackageVariant_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
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

