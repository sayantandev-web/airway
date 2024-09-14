<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\Appengine\Resource;

use Google\Service\Appengine\ListLocationsResponse;
use Google\Service\Appengine\Location;

/**
 * The "locations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appengineService = new Google\Service\Appengine(...);
 *   $locations = $appengineService->apps_locations;
 *  </code>
 */
class AppsLocations extends \Google\Service\Resource
{
  /**
   * Gets information about a location. (locations.get)
   *
   * @param string $appsId Part of `name`. Resource name for the location.
   * @param string $locationsId Part of `name`. See documentation of `appsId`.
   * @param array $optParams Optional parameters.
   * @return Location
   */
  public function get($appsId, $locationsId, $optParams = [])
  {
    $params = ['appsId' => $appsId, 'locationsId' => $locationsId];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], Location::class);
  }
  /**
   * Lists information about the supported locations for this service.
   * (locations.listAppsLocations)
   *
   * @param string $appsId Part of `name`. The resource that owns the locations
   * collection, if applicable.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter A filter to narrow down results to a preferred
   * subset. The filtering language accepts strings like "displayName=tokyo", and
   * is documented in more detail in AIP-160 (https://google.aip.dev/160).
   * @opt_param int pageSize The maximum number of results to return. If not set,
   * the service selects a default.
   * @opt_param string pageToken A page token received from the next_page_token
   * field in the response. Send that page token to receive the subsequent page.
   * @return ListLocationsResponse
   */
  public function listAppsLocations($appsId, $optParams = [])
  {
    $params = ['appsId' => $appsId];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListLocationsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AppsLocations::class, 'Google_Service_Appengine_Resource_AppsLocations');