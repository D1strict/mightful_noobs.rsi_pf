<?php

namespace wcf\system\option\user;

use wcf\data\user\option\UserOption;
use wcf\data\user\User;
use wcf\util\StringUtil;

class RsiOrgOptionOutput implements IUserOptionOutput
{
	/**
	 * @see wcf\system\option\user\IUserOptionOutput::getOutput()
	 */
	public function getOutput(User $user, UserOption $option, $value)
	{
		if (empty($value)) {
			return '';
		}

		return StringUtil::getAnchorTag('https://robertsspaceindustries.com/orgs/' . $value, $value, true, true);
	}
}
