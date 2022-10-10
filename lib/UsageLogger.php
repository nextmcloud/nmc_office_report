<?php
/**
 * @copyright Copyright (c) 2022 Julius Härtl <jus@bitgrid.net>
 *
 * @author Julius Härtl <jus@bitgrid.net>
 *
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

namespace OCA\NmcOfficeReport;

use OCP\IConfig;
use OCP\Log\ILogFactory;
use Psr\Log\LoggerInterface;

class UsageLogger {

	private LoggerInterface $parentLogger;

	public function __construct(ILogFactory $logFactory, IConfig $config) {
		$default = $config->getSystemValue('datadirectory', \OC::$SERVERROOT . '/data') . '/office.log';
		$logFile = $config->getAppValue('logfile_office_report', 'logfile', $default);
		$this->parentLogger = $logFactory->getCustomPsrLogger($logFile);
	}

	public function emergency($message, array $context = array()) {
		$this->parentLogger->emergency($message, $context);
	}

	public function alert($message, array $context = array()) {
		$this->parentLogger->alert($message, $context);
	}

	public function critical($message, array $context = array()) {
		$this->parentLogger->critical($message, $context);
	}

	public function error($message, array $context = array()) {
		$this->parentLogger->error($message, $context);
	}

	public function warning($message, array $context = array()) {
		$this->parentLogger->warning($message, $context);
	}

	public function notice($message, array $context = array()) {
		$this->parentLogger->notice($message, $context);
	}

	public function info($message, array $context = array()) {
		$this->parentLogger->info($message, $context);
	}

	public function debug($message, array $context = array()) {
		$this->parentLogger->debug($message, $context);
	}

	public function log($level, $message, array $context = array()) {
		$this->parentLogger->log($level, $message, $context);
	}
}
