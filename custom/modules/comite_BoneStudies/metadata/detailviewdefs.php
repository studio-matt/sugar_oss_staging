<?php
include(dirname(__FILE__).'/../../../../modules/comite_BoneStudies/metadata/detailviewdefs.php');
$module_name = 'comite_BoneStudies';

$viewdefs[$module_name]['DetailView']['templateMeta']['form']['buttons'][] = array(
  'customCode' => '<input title="Generate Bone Study PDF" class="button" onclick="this.form.return_module.value=\'comite_BoneStudies\'; this.form.return_action.value=\'DetailView\';this.form.return_id.value=\'{$fields.id.value}\'; this.form.module.value=\'comite_Letters\'; this.form.action.value=\'Bonestudy\'; this.form.record.value=\'{$fields.id.value}\';" name="bone_study_pdf" value="Generate Bone Study PDF" type="submit">'
);
?>
