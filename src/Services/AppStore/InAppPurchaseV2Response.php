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

class InAppPurchaseV2Response extends \Mantix\AppStoreConnect\Model
{
	protected $dataType = InAppPurchaseV2::class;
	protected $dataDataType = '';
	protected $includedType = [InAppPurchaseLocalization::class, InAppPurchasePricePoint::class, InAppPurchaseContent::class, InAppPurchaseAppStoreReviewScreenshot::class, PromotedPurchase::class, InAppPurchasePriceSchedule::class, InAppPurchaseAvailability::class];
	protected $includedDataType = 'array[*]';
	protected $linksType = DocumentLinks::class;
	protected $linksDataType = '';

	/**
	* @return  InAppPurchaseV2
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  InAppPurchaseV2
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}
	public function getIncluded()
	{
		return $this->included;
	}
	public function setIncluded($included)
	{
		$this->included = $included;
		return $this;
	}
	/**
	* @return  DocumentLinks
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  DocumentLinks
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}

}

