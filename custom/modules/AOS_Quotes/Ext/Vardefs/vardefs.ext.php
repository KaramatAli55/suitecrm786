<?php 
 //WARNING: The contents of this file are auto-generated


$dictionary['AOS_Quotes']['fields'][ 'parent_type'] =
    array(
        'name' => 'parent_type',
        'vname' => 'LBL_PARENT_TYPE',
        'type' => 'parent_type',
        'dbType' => 'varchar',
        'group' => 'parent_name',
        'options' => 'parent_type_display',
        'required' => false,
        'len' => '255',
        'comment' => 'The Sugar object to which the call is related',
        'options' => 'parent_type_display',
    );

$dictionary['AOS_Quotes']['fields']['parent_name'] =
    array(
        'name' => 'parent_name',
        'parent_type' => 'record_type_display',
        'type_name' => 'parent_type',
        'id_name' => 'parent_id',
        'vname' => 'LBL_LIST_RELATED_TO',
        'type' => 'parent',
        'group' => 'parent_name',
        'source' => 'non-db',
        'options' => 'parent_type_display',
    );

$dictionary['AOS_Quotes']['fields']['parent_id'] =
    array(
        'name' => 'parent_id',
        'type' => 'id',
        'group' => 'parent_name',
        'reportable' => false,
        'vname' => 'LBL_PARENT_ID',
    );

?>