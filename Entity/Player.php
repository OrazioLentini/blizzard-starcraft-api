<?php

namespace petrepatrasc\BlizzardApiBundle\Entity;
use petrepatrasc\BlizzardApiBundle\Entity\Player\Achievements;

/**
 * Class holds a representation of a player's profile.
 * @package petrepatrasc\BlizzardApiBundle\Entities
 */
class Player
{

    /**
     * Battle.NET ID
     *
     * @var int
     */
    protected $id;

    /**
     * @var int
     */
    protected $realm;

    /**
     * @var string
     */
    protected $displayName;

    /**
     * @var string
     */
    protected $clanName;

    /**
     * @var string
     */
    protected $clanTag;

    /**
     * @var string
     */
    protected $profilePath;

    /**
     * @var Player\Portrait
     */
    protected $portrait;

    /**
     * @var Player\Career
     */
    protected $career;

    /**
     * @var PlayerSwarmLevels
     */
    protected $swarmLevels;

    /**
     * @var Player\Campaign
     */
    protected $campaign;

    /**
     * @var Player\Season
     */
    protected $season;

    /**
     * @var Player\Rewards
     */
    protected $rewards;

    /**
     * @var Achievements
     */
    protected $achievements;

    /**
     * @param string $clanName
     * @return $this
     */
    public function setClanName($clanName)
    {
        $this->clanName = $clanName;
        return $this;
    }

    /**
     * @return string
     */
    public function getClanName()
    {
        return $this->clanName;
    }

    /**
     * @param string $clanTag
     * @return $this
     */
    public function setClanTag($clanTag)
    {
        $this->clanTag = $clanTag;
        return $this;
    }

    /**
     * @return string
     */
    public function getClanTag()
    {
        return $this->clanTag;
    }

    /**
     * @param string $displayName
     * @return $this
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
        return $this;
    }

    /**
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $profilePath
     * @return $this
     */
    public function setProfilePath($profilePath)
    {
        $this->profilePath = $profilePath;
        return $this;
    }

    /**
     * @return string
     */
    public function getProfilePath()
    {
        return $this->profilePath;
    }

    /**
     * @param int $realm
     * @return $this
     */
    public function setRealm($realm)
    {
        $this->realm = $realm;
        return $this;
    }

    /**
     * @return int
     */
    public function getRealm()
    {
        return $this->realm;
    }

    /**
     * @param \petrepatrasc\BlizzardApiBundle\Entity\Player\Portrait $portrait
     * @return $this
     */
    public function setPortrait($portrait)
    {
        $this->portrait = $portrait;
        return $this;
    }

    /**
     * @return \petrepatrasc\BlizzardApiBundle\Entity\Player\Portrait
     */
    public function getPortrait()
    {
        return $this->portrait;
    }

    /**
     * @param \petrepatrasc\BlizzardApiBundle\Entity\Player\Career $career
     * @return $this
     */
    public function setCareer($career)
    {
        $this->career = $career;
        return $this;
    }

    /**
     * @return \petrepatrasc\BlizzardApiBundle\Entity\Player\Career
     */
    public function getCareer()
    {
        return $this->career;
    }

    /**
     * @param \petrepatrasc\BlizzardApiBundle\Entity\PlayerSwarmLevels $swarmLevels
     * @return $this
     */
    public function setSwarmLevels($swarmLevels)
    {
        $this->swarmLevels = $swarmLevels;
        return $this;
    }

    /**
     * @return \petrepatrasc\BlizzardApiBundle\Entity\PlayerSwarmLevels
     */
    public function getSwarmLevels()
    {
        return $this->swarmLevels;
    }

    /**
     * @param \petrepatrasc\BlizzardApiBundle\Entity\Player\Campaign $campaign
     * @return $this
     */
    public function setCampaign($campaign)
    {
        $this->campaign = $campaign;
        return $this;
    }

    /**
     * @return \petrepatrasc\BlizzardApiBundle\Entity\Player\Campaign
     */
    public function getCampaign()
    {
        return $this->campaign;
    }

    /**
     * @param \petrepatrasc\BlizzardApiBundle\Entity\Player\Season $season
     * @return $this
     */
    public function setSeason($season)
    {
        $this->season = $season;
        return $this;
    }

    /**
     * @return \petrepatrasc\BlizzardApiBundle\Entity\Player\Season
     */
    public function getSeason()
    {
        return $this->season;
    }

    /**
     * @param \petrepatrasc\BlizzardApiBundle\Entity\Player\Rewards $rewards
     * @return $this
     */
    public function setRewards($rewards)
    {
        $this->rewards = $rewards;
        return $this;
    }

    /**
     * @return \petrepatrasc\BlizzardApiBundle\Entity\Player\Rewards
     */
    public function getRewards()
    {
        return $this->rewards;
    }

    /**
     * @param \petrepatrasc\BlizzardApiBundle\Entity\Player\Achievements $achievements
     * @return $this
     */
    public function setAchievements($achievements)
    {
        $this->achievements = $achievements;
        return $this;
    }

    /**
     * @return \petrepatrasc\BlizzardApiBundle\Entity\Player\Achievements
     */
    public function getAchievements()
    {
        return $this->achievements;
    }


}