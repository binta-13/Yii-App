/**
 * Database schema required by \yii\web\DbSession.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @author Misbahul D Munir <misbahuldmunir@gmail.com>
 * @link https://www.yiiframework.com/
 * @copyright 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 * @since 2.0.8
 */

drop table if exists `session`;

create table `session`
(
    `id`  varchar(256) not null,
    `expire` integer,
    `data`   LONGBLOB,
    primary key (`id`)
) engine InnoDB;
