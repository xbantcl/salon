DROP TABLE IF EXISTS `video`;
CREATE TABLE `video` (
    `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
    `uid` int(11) unsigned NOT NULL COMMENT '用户Id',
    `name` varchar(255) NOT NULL COMMENT '电影名称',
    `address_url` varchar(255) NOT NULL COMMENT '电影地址',
    `cover_url` varchar(255) DEFAULT '' COMMENT '电影封面图片',
    `source` varchar(255) DEFAULT '未知' COMMENT '电影来源',
    `director` varchar(255) DEFAULT '未知' COMMENT '导演',
    `co-star` varchar(255) DEFAULT '未知' COMMENT '主演',
    `star` float DEFAULT 0.0 COMMENT '电影评分',
    `time_length` int(11) DEFAULT 0 COMMENT '播放时间长度',
    `status` tinyint DEFAULT 1 COMMENT '电影状态, 1-正常, 2-删除',
    `label` varchar(255) DEFAULT '' COMMENT '电影标签',
    `insert_time` int(11) unsigned NOT NULL DEFAULT 0 COMMENT '注册时间',
    `modify_time` int(11) unsigned NOT NULL DEFAULT 0 COMMENT '修改时间',
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4  COMMENT='电影表';
