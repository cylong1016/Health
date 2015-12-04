
-- 用户表
CREATE TABLE user (
    id integer PRIMARY KEY,
    name varchar(64),
    pass varchar(64),
    identity integer,   -- 0:管理员;1:普通用户;2:医生;3:教练
    goal double,       -- 本周运动目标/公里
    avatar varchar(64),
    sex integer,        -- 0:男;1:女
    motto text,         -- 座右铭
    docid integer,      -- 医生id,-1代表无
    coaid integer       -- 教练id,-1代表无
);

INSERT INTO user (name, pass, identity, goal, avatar, sex, motto, docid, coaid) VALUES ('cylong', 'cyl941016', 1, 10, '', 0, '好好运动', -1, -1);
INSERT INTO user (name, pass, identity, goal, avatar, sex, motto, docid, coaid) VALUES ('cylong1', 'cyl941016', 1, 10, '', 0, '天天向上', -1, -1);

SELECT * FROM user;

CREATE TABLE user_health (
    id integer PRIMARY KEY,
    uid integer,
    create_date date,
    height double,
    weight double,
    hr integer,         -- 心率
    bph integer,        -- 收缩压
    bpl integer,        -- 舒张压
    run_time double,    -- 运动总时间
    run_distance double -- 运动总距离
);

INSERT INTo user_health(uid, create_date, height, weight, hr, bph, bpl, run_time, run_distance) VALUES (1, '2015-12-12', 179, 56, 60, 100, 70, 30.1, 20.3);

SELECT * FROM user_health;
