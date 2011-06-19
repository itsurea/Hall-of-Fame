<?php

class game_core {
	function glob($path, $flags = 0) {
		$ret = array();

		switch($path) {
			case LOG_BATTLE_NORMAL:
			case LOG_BATTLE_RANK:
			case LOG_BATTLE_UNION:
				$ret = @glob($path.'*.dat', $flags);
				break;
			default:
				$ret = @glob($path, $flags);
				break;
		}

		return $ret;
	}

	function glob_del($path) {
		if ($ret = self::glob($path)) {
			foreach($ret as $file) {
				unlink($file);
			}
		}
	}
}

?>