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

use Mantix\AppStoreConnect\Services\AppStore\BundleIdsResponse;
use Mantix\AppStoreConnect\Services\AppStore\BundleIdResponse;
use Mantix\AppStoreConnect\Services\AppStore\BundleIdCreateRequest;
use Mantix\AppStoreConnect\Services\AppStore\BundleIdUpdateRequest;
use Mantix\AppStoreConnect\Services\AppStore\AppWithoutIncludesResponse;
use Mantix\AppStoreConnect\Services\AppStore\BundleIdCapabilitiesWithoutIncludesResponse;
use Mantix\AppStoreConnect\Services\AppStore\ProfilesWithoutIncludesResponse;

/**
 * The "bundleIds" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appStoreService = new Mantix\AppStoreConnect\Service\AppStore(...);
 *   $bundleIds = $appStoreService->bundleIds;
 *  </code>
 */
class BundleIds extends \Mantix\AppStoreConnect\Services\Resource
{

    /**
	 * @param array $optParams Optional parameters.
     * @return BundleIdsResponse
     */
    public function listBundleIds($optParams = [])
    {
		$params = [];
		$params = array_merge($params, $optParams);
        return $this->call('listBundleIds', [$params], BundleIdsResponse::class);
    }
    /**
	 * @param BundleIdCreateRequest $postBody
     * @return BundleIdResponse
     */
    public function createBundleIds(BundleIdCreateRequest $postBody)
    {
		$params = ['postBody' => $postBody];
        return $this->call('createBundleIds', [$params], BundleIdResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return BundleIdResponse
     */
    public function getBundleIds($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getBundleIds', [$params], BundleIdResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param BundleIdUpdateRequest $postBody
     * @return BundleIdResponse
     */
    public function updateBundleIds($id, BundleIdUpdateRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('updateBundleIds', [$params], BundleIdResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
     * @return null
     */
    public function deleteBundleIds($id)
    {
		$params = ['id' => $id];
        return $this->call('deleteBundleIds', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return AppWithoutIncludesResponse
     */
    public function getBundleIdsApp($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getBundleIdsApp', [$params], AppWithoutIncludesResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return BundleIdCapabilitiesWithoutIncludesResponse
     */
    public function listBundleIdsBundleIdCapabilities($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listBundleIdsBundleIdCapabilities', [$params], BundleIdCapabilitiesWithoutIncludesResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return ProfilesWithoutIncludesResponse
     */
    public function listBundleIdsProfiles($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listBundleIdsProfiles', [$params], ProfilesWithoutIncludesResponse::class);
    }
}

