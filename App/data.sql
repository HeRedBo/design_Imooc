
# 新建用户表
CREATE DATABASE `phpdesign` CHARSET utf8;
# 使用数据库 || 切记要切换数据库
use `phpdesign`;
CREATE TABLE `user`(
    `id` mediumint unsigned NOT NULL AUTO_INCREMENT COMMENT '主键id',
    `username` varchar(30) NOT NULL DEFAULT '' COMMENT '用户名',
    `password` varchar(30) NOT NULL DEFAULT '' COMMENT '密码',
    `mobile_phone` char(15) NOT NULL DEFAULT '' COMMENT '手机号码',
    `add_time` int NOT NULL DEFAULT '0' COMMENT '注册时间',
    `update_time` int NOT NULL DEFAULT '0' COMMENT '更新时间',
    PRIMARY KEY(`id`),
    key `add_time` (`add_time`),
    key `update_time` (`update_time`)
) ENGINE=InnoDB CHARSET = utf8 COMMENT '用户表';
