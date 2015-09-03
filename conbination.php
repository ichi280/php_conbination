<?php
/**
 * 配列からコンビネーションによる値のセットを作る
 *
 * @param    array $arrSource 全データ
 * @param    int $int 選択数
 * @return   array 取り出される全パターン
 */
function conbination($arrSource,$int){

	$cnt = count($arrSource);

	if($cnt < $int){
		return;
	}
	elseif($int == 1){
		for($i = 0; $i < $cnt; $i++){
			$arrRet[$i] = array($arrSource[$i]);
		}
	}
	elseif(1 < $int){
		$j = 0;

		for($i = 0; $i < $cnt - $int + 1; $i++){
			$ts = conbination(array_slice($arrSource, $i + 1), $int - 1);

			foreach($ts as $t){
				array_unshift($t, $arrSource[$i]);
				$arrRet[$j] = $t;
				$j++;
			}
		}
	}
	return $arrRet;
}
?>