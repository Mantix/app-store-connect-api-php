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

use Mantix\AppStoreConnect\Services\AppStore\BetaGroupsResponse;
use Mantix\AppStoreConnect\Services\AppStore\BetaGroupResponse;
use Mantix\AppStoreConnect\Services\AppStore\BetaGroupCreateRequest;
use Mantix\AppStoreConnect\Services\AppStore\BetaGroupUpdateRequest;
use Mantix\AppStoreConnect\Services\AppStore\AppWithoutIncludesResponse;
use Mantix\AppStoreConnect\Services\AppStore\BetaGroupBetaTestersLinkagesResponse;
use Mantix\AppStoreConnect\Services\AppStore\BetaGroupBetaTestersLinkagesRequest;
use Mantix\AppStoreConnect\Services\AppStore\BetaTestersWithoutIncludesResponse;
use Mantix\AppStoreConnect\Services\AppStore\BetaGroupBuildsLinkagesResponse;
use Mantix\AppStoreConnect\Services\AppStore\BetaGroupBuildsLinkagesRequest;
use Mantix\AppStoreConnect\Services\AppStore\BuildsWithoutIncludesResponse;
use Mantix\AppStoreConnect\Services\AppStore\AppsBetaTesterUsagesV1MetricResponse;

/**
 * The "betaGroups" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appStoreService = new Mantix\AppStoreConnect\Service\AppStore(...);
 *   $betaGroups = $appStoreService->betaGroups;
 *  </code>
 */
class BetaGroups extends \Mantix\AppStoreConnect\Services\Resource
{

    /**
	 * @param array $optParams Optional parameters.
     * @return BetaGroupsResponse
     */
    public function listBetaGroups($optParams = [])
    {
		$params = [];
		$params = array_merge($params, $optParams);
        return $this->call('listBetaGroups', [$params], BetaGroupsResponse::class);
    }
    /**
	 * @param BetaGroupCreateRequest $postBody
     * @return BetaGroupResponse
     */
    public function createBetaGroups(BetaGroupCreateRequest $postBody)
    {
		$params = ['postBody' => $postBody];
        return $this->call('createBetaGroups', [$params], BetaGroupResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return BetaGroupResponse
     */
    public function getBetaGroups($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getBetaGroups', [$params], BetaGroupResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param BetaGroupUpdateRequest $postBody
     * @return BetaGroupResponse
     */
    public function updateBetaGroups($id, BetaGroupUpdateRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('updateBetaGroups', [$params], BetaGroupResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
     * @return null
     */
    public function deleteBetaGroups($id)
    {
		$params = ['id' => $id];
        return $this->call('deleteBetaGroups', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return AppWithoutIncludesResponse
     */
    public function getBetaGroupsApp($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getBetaGroupsApp', [$params], AppWithoutIncludesResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return BetaGroupBetaTestersLinkagesResponse
     */
    public function listBetaGroupsBetaTestersLinkages($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listBetaGroupsBetaTestersLinkages', [$params], BetaGroupBetaTestersLinkagesResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param BetaGroupBetaTestersLinkagesRequest $postBody
     * @return null
     */
    public function createListBetaGroupsBetaTesters($id, BetaGroupBetaTestersLinkagesRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('createListBetaGroupsBetaTesters', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param BetaGroupBetaTestersLinkagesRequest $postBody
     * @return null
     */
    public function deleteListBetaGroupsBetaTesters($id, BetaGroupBetaTestersLinkagesRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('deleteListBetaGroupsBetaTesters', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return BetaTestersWithoutIncludesResponse
     */
    public function listBetaGroupsBetaTesters($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listBetaGroupsBetaTesters', [$params], BetaTestersWithoutIncludesResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return BetaGroupBuildsLinkagesResponse
     */
    public function listBetaGroupsBuildsLinkages($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listBetaGroupsBuildsLinkages', [$params], BetaGroupBuildsLinkagesResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param BetaGroupBuildsLinkagesRequest $postBody
     * @return null
     */
    public function createListBetaGroupsBuilds($id, BetaGroupBuildsLinkagesRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('createListBetaGroupsBuilds', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param BetaGroupBuildsLinkagesRequest $postBody
     * @return null
     */
    public function deleteListBetaGroupsBuilds($id, BetaGroupBuildsLinkagesRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('deleteListBetaGroupsBuilds', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return BuildsWithoutIncludesResponse
     */
    public function listBetaGroupsBuilds($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listBetaGroupsBuilds', [$params], BuildsWithoutIncludesResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return AppsBetaTesterUsagesV1MetricResponse
     */
    public function getBetaGroupsBetaTesterUsagesMetrics($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getBetaGroupsBetaTesterUsagesMetrics', [$params], AppsBetaTesterUsagesV1MetricResponse::class);
    }
}

