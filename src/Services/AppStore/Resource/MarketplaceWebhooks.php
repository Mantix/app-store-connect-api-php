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

use Mantix\AppStoreConnect\Services\AppStore\MarketplaceWebhooksResponse;
use Mantix\AppStoreConnect\Services\AppStore\MarketplaceWebhookResponse;
use Mantix\AppStoreConnect\Services\AppStore\MarketplaceWebhookCreateRequest;
use Mantix\AppStoreConnect\Services\AppStore\MarketplaceWebhookUpdateRequest;

/**
 * The "marketplaceWebhooks" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appStoreService = new Mantix\AppStoreConnect\Service\AppStore(...);
 *   $marketplaceWebhooks = $appStoreService->marketplaceWebhooks;
 *  </code>
 */
class MarketplaceWebhooks extends \Mantix\AppStoreConnect\Services\Resource
{

    /**
	 * @param array $optParams Optional parameters.
     * @return MarketplaceWebhooksResponse
     */
    public function listMarketplaceWebhooks($optParams = [])
    {
		$params = [];
		$params = array_merge($params, $optParams);
        return $this->call('listMarketplaceWebhooks', [$params], MarketplaceWebhooksResponse::class);
    }
    /**
	 * @param MarketplaceWebhookCreateRequest $postBody
     * @return MarketplaceWebhookResponse
     */
    public function createMarketplaceWebhooks(MarketplaceWebhookCreateRequest $postBody)
    {
		$params = ['postBody' => $postBody];
        return $this->call('createMarketplaceWebhooks', [$params], MarketplaceWebhookResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param MarketplaceWebhookUpdateRequest $postBody
     * @return MarketplaceWebhookResponse
     */
    public function updateMarketplaceWebhooks($id, MarketplaceWebhookUpdateRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('updateMarketplaceWebhooks', [$params], MarketplaceWebhookResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
     * @return null
     */
    public function deleteMarketplaceWebhooks($id)
    {
		$params = ['id' => $id];
        return $this->call('deleteMarketplaceWebhooks', [$params], null);
    }
}

