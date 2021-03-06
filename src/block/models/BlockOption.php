<?php

namespace YiiConfigureLogic\block\models;

use YiiConfigureLogic\components\ConfigureModel;

/**
 * This is the model class for table "{{%block_option}}".
 *
 * @property int $id 自增ID
 * @property string $key 区块标识
 * @property string $label 链接显示名称
 * @property string $link 链接地址
 * @property string $src 图片地址
 * @property int $sort_order 排序
 * @property int $is_enable 是否启用发布显示
 * @property int $is_blank 如果为链接，是否新开窗口
 * @property string $description 描述
 * @property string $created_at 创建时间
 * @property string $updated_at 更新时间
 */
class BlockOption extends ConfigureModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%block_option}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['key'], 'required'],
            [['sort_order', 'is_enable', 'is_blank'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['key', 'label'], 'string', 'max' => 100],
            [['link', 'src'], 'string', 'max' => 200],
            [['description'], 'string', 'max' => 255],
            [['key', 'label'], 'unique', 'targetAttribute' => ['key', 'label']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id'          => '自增ID',
            'key'         => '区块标识',
            'label'       => '链接显示名称',
            'link'        => '链接地址',
            'src'         => '图片地址',
            'sort_order'  => '排序',
            'is_enable'   => '是否启用发布显示',
            'is_blank'    => '如果为链接，是否新开窗口',
            'description' => '描述',
            'created_at'  => '创建时间',
            'updated_at'  => '更新时间',
        ];
    }
}
