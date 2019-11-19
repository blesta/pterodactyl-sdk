<?php
namespace Blesta\PterodactylSDK\Requestors;

include_once dirname(__DIR__) . '/Requestor.php';

class Nests extends \Blesta\PterodactylSDK\Requestor
{
    /**
     * Fetches a list of nests from Pterodactyl
     *
     * @return PterodactylResponse
     */
    public function getAll()
    {
        return $this->apiRequest('application/nests');
    }

    /**
     * Fetches a nest from Pterodactyl
     *
     * @param int $nestId The ID of the nest to fetch
     * @return PterodactylResponse
     */
    public function get($nestId)
    {
        return $this->apiRequest('application/nests/' . $nestId);
    }

    /**
     * Fetches a list of eggs for the given nest nest from Pterodactyl
     *
     * @param int $nestId The ID of the nest to fetch eggs for
     * @return PterodactylResponse
     */
    public function eggsGetAll($nestId)
    {
        return $this->apiRequest('application/nests/' . $nestId . '/eggs' . '?include=variables');
    }

    /**
     * Fetches an egg from Pterodactyl
     *
     * @param int $nestId The ID of the nest to which the egg belongs
     * @param int $egg_id The ID of the egg to fetch
     * @return PterodactylResponse
     */
    public function eggsGet($nestId, $egg_id)
    {
        return $this->apiRequest('application/nests/' . $nestId . '/eggs/' . $egg_id . '?include=variables');
    }
}