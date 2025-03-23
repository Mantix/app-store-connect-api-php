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

namespace Mantix\AppStoreConnect\Services\AppStore\Resource;

use Mantix\AppStoreConnect\Services\AppStore\SubscriptionResponse;
use Mantix\AppStoreConnect\Services\AppStore\SubscriptionCreateRequest;
use Mantix\AppStoreConnect\Services\AppStore\SubscriptionUpdateRequest;
use Mantix\AppStoreConnect\Services\AppStore\SubscriptionAppStoreReviewScreenshotResponse;
use Mantix\AppStoreConnect\Services\AppStore\SubscriptionIntroductoryOffersLinkagesResponse;
use Mantix\AppStoreConnect\Services\AppStore\SubscriptionIntroductoryOffersLinkagesRequest;
use Mantix\AppStoreConnect\Services\AppStore\SubscriptionIntroductoryOffersResponse;
use Mantix\AppStoreConnect\Services\AppStore\SubscriptionOfferCodesResponse;
use Mantix\AppStoreConnect\Services\AppStore\csv;
use Mantix\AppStoreConnect\Services\AppStore\SubscriptionPricesLinkagesResponse;
use Mantix\AppStoreConnect\Services\AppStore\SubscriptionPricesLinkagesRequest;
use Mantix\AppStoreConnect\Services\AppStore\SubscriptionPricesResponse;
use Mantix\AppStoreConnect\Services\AppStore\PromotedPurchaseResponse;
use Mantix\AppStoreConnect\Services\AppStore\SubscriptionPromotionalOffersResponse;
use Mantix\AppStoreConnect\Services\AppStore\SubscriptionAvailabilityResponse;
use Mantix\AppStoreConnect\Services\AppStore\SubscriptionLocalizationsResponse;

/**
 * The "subscriptions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appStoreService = new Mantix\AppStoreConnect\Service\AppStore(...);
 *   $subscriptions = $appStoreService->subscriptions;
 *  </code>
 */
class Subscriptions extends \Mantix\AppStoreConnect\Services\Resource
{

    /**
	 * @param SubscriptionCreateRequest $postBody
     * @return SubscriptionResponse
     */
    public function createSubscriptions(SubscriptionCreateRequest $postBody)
    {
		$params = ['postBody' => $postBody];
        return $this->call('createSubscriptions', [$params], SubscriptionResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return SubscriptionResponse
     */
    public function getSubscriptions($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getSubscriptions', [$params], SubscriptionResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param SubscriptionUpdateRequest $postBody
     * @return SubscriptionResponse
     */
    public function updateSubscriptions($id, SubscriptionUpdateRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('updateSubscriptions', [$params], SubscriptionResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
     * @return null
     */
    public function deleteSubscriptions($id)
    {
		$params = ['id' => $id];
        return $this->call('deleteSubscriptions', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return SubscriptionAppStoreReviewScreenshotResponse
     */
    public function getSubscriptionsAppStoreReviewScreenshot($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getSubscriptionsAppStoreReviewScreenshot', [$params], SubscriptionAppStoreReviewScreenshotResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return SubscriptionIntroductoryOffersLinkagesResponse
     */
    public function listSubscriptionsIntroductoryOffersLinkages($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listSubscriptionsIntroductoryOffersLinkages', [$params], SubscriptionIntroductoryOffersLinkagesResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param SubscriptionIntroductoryOffersLinkagesRequest $postBody
     * @return null
     */
    public function deleteListSubscriptionsIntroductoryOffers($id, SubscriptionIntroductoryOffersLinkagesRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('deleteListSubscriptionsIntroductoryOffers', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return SubscriptionIntroductoryOffersResponse
     */
    public function listSubscriptionsIntroductoryOffers($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listSubscriptionsIntroductoryOffers', [$params], SubscriptionIntroductoryOffersResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return SubscriptionOfferCodesResponse
     */
    public function listSubscriptionsOfferCodes($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listSubscriptionsOfferCodes', [$params], SubscriptionOfferCodesResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return csv
     */
    public function listSubscriptionsPricePoints($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listSubscriptionsPricePoints', [$params], csv::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return SubscriptionPricesLinkagesResponse
     */
    public function listSubscriptionsPricesLinkages($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listSubscriptionsPricesLinkages', [$params], SubscriptionPricesLinkagesResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param SubscriptionPricesLinkagesRequest $postBody
     * @return null
     */
    public function deleteListSubscriptionsPrices($id, SubscriptionPricesLinkagesRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('deleteListSubscriptionsPrices', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return SubscriptionPricesResponse
     */
    public function listSubscriptionsPrices($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listSubscriptionsPrices', [$params], SubscriptionPricesResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return PromotedPurchaseResponse
     */
    public function getSubscriptionsPromotedPurchase($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getSubscriptionsPromotedPurchase', [$params], PromotedPurchaseResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return SubscriptionPromotionalOffersResponse
     */
    public function listSubscriptionsPromotionalOffers($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listSubscriptionsPromotionalOffers', [$params], SubscriptionPromotionalOffersResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return SubscriptionAvailabilityResponse
     */
    public function getSubscriptionsSubscriptionAvailability($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getSubscriptionsSubscriptionAvailability', [$params], SubscriptionAvailabilityResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return SubscriptionLocalizationsResponse
     */
    public function listSubscriptionsSubscriptionLocalizations($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listSubscriptionsSubscriptionLocalizations', [$params], SubscriptionLocalizationsResponse::class);
    }
}

