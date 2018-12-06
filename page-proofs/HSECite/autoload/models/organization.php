<?php
	namespace models;
	Class organization
	{
		static function organizations_index(){
			$result = \F3::get('DB')->exec("SELECT  organizations.id, organizations.name as org_name,  
													organizations.link, organizations.description, 
													organizations_group.id as group_id, 
													organizations_group.name as group_name
											FROM organizations 
											LEFT OUTER JOIN organizations_group 
											ON organizations.id_group=organizations_group.id");
			return $result;
		}

		static function add_organization ($organization_name, $link, $desc, $group) {
			return \F3::get('DB')->exec("INSERT INTO organizations (name, link, description, id_group) VALUES ('$organization_name', '$link', '$desc', '$group')");
		}

		// функция редактирования конкретного кампуса
		static function editing_organization_layout($id) {
			return \F3::get('DB')->exec("SELECT * FROM organizations WHERE id = '$id'");
		}

		// функция удаления кампуса
		static function delete_organization ($id) {
			return \F3::get('DB')->exec("DELETE FROM organizations WHERE id = '$id'");			
		}
		static function editing_organization ($id, $organization_name, $link, $desc, $group) {
			return \F3::get('DB')->exec("UPDATE organizations SET 
													name = '$organization_name',
													link = '$link',
													description = '$desc',
													id_group = '$group'

												WHERE id =?", $id);
		}
	}
?>