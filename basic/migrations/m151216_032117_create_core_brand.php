<?php

use yii\db\Schema;
use yii\db\Migration;

class m151216_032117_create_core_brand extends Migration
{
    public $tableName="core_brand";
    public function up()
    {
        $column=array(
                'id'=>'pk comment "主键"',
                'name'=>'varchar(255) not null default "" comment "品牌名称"',
                'firstLetter'=>'varchar(10) not null default "" comment "品牌首字母"',
                'imgUrl'=>'varchar(500) not null default "" comment "品牌标志图"',
                'fname' =>'varchar(255) not null default ""  comment "首字母-名称" ',
                'created'=>'datetime not null default "0000-00-00 00:00:00" comment "创建时间"',
                'updated'=>'datetime not null default "0000-00-00 00:00:00" comment "更新时间"',
                'deleted' =>'datetime not null default "0000-00-00 00:00:00" comment "删除时间"',
                'is_deleted'=>'tinyint not null default 0  comment "是否删除标志位"',
                'operationer'=>'int(11) not null default 0 comment "操作人"',   
            );
        $options='engine=innodb default charset=utf8';
        $this->createTable($this->tableName,$column,$options);
    }

    public function down()
    {
        $this->dropTable($this->tableName);
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
