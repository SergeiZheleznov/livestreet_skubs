<?php

class PluginSkubs_ModuleSkubs_MapperSkubs extends Mapper
{
	public function GetSkubStat($sUserId,$iLimit) {
		$sql = "SELECT 
					b.*,
					count(*) as blog_skubs
				FROM 
					".Config::Get('db.table.topic')." as t,
					".Config::Get('db.table.blog')." as b	
				WHERE 	
					t.user_id = ?d
					AND
					t.blog_id = b.blog_id
					AND				
					b.blog_type<>'personal'							
				GROUP BY t.blog_id
				ORDER by blog_skubs desc
				LIMIT 0, ?d 
				;	
					";
		$aReturn=array();
		if ($aRows=$this->oDb->select($sql,$sUserId,$iLimit)) {
			foreach ($aRows as $aRow) {
				$aReturn[]=Engine::GetEntity('Blog',$aRow);
			}
		}
		return $aReturn;
	}
}

?>
