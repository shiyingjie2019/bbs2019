CREATE DATABASE IF NOT EXISTS bbs DEFAULT CHARSET utf8 COLLATE utf8_general_ci;

USE bbs;

CREATE TABLE BbsUser(#用户表 
	UID   				 INT			auto_increment	PRIMARY KEY,   #用户ID
	Uname 				 VARCHAR(10) 	 NOT NULL		 UNIQUE,	#用户昵称
	UPassword			 VARCHAR(20)	 NOT NULL,				#密码
	UEmail 				 VARCHAR(20)	 NOT NULL,				#电子邮件
	UBirthday			 VARCHAR(20),						#生日
	USex 				 INT		 NOT NULL,				#性别
	UHead				 VARCHAR(20),						#头像
	USatement			 VARCHAR(20),						#用户备注
	URegDate			 DATETIME	 NOT NULL DEFAULT CURRENT_TIMESTAMP,	#创建时间
	UState				 INT,							#用户状态
	UPoint				 INT,							#用户积分
	UIsSectioner		 INT            default 0					#是否为版主,默认不是版主
	);



CREATE TABLE BbsSession(#版块表
	SID 			INT			auto_increment	PRIMARY KEY, #版块ID
	SName			VARCHAR(10) NOT NULL		UNIQUE,		 #版块名称
	SMasterID		INT			NOT NULL,   				 #版主ID
	SProfile		VARCHAR(20),							 #版块主题
	SStatement		VARCHAR(20),							 #本版留言
	STopicCount		INT,								 #发帖数
	SClickCount		INT								 #点击率
	);



CREATE TABLE BbsTopic(#主贴表
	TID 			INT			auto_increment		 		PRIMARY KEY,#发帖表ID
	TSID			INT 		NOT NULL,					#所在版块
	TUID			INT  		NOT NULL,					#发帖人
	TReplyCount		INT,									#回复数
	TEmotion		VARCHAR(20),							#发帖表情
	TTOPIC			VARCHAR(10)	NOT NULL,					#标题
	TContents		VARCHAR(50)	NOT NULL,					#正文
	TTime			DATETIME	NOT NULL DEFAULT CURRENT_TIMESTAMP,#发帖时间
	TClickCount		INT,									#点击率
	TFlag			INT,									#状态
	TLastReplyUseID INT,									#最后恢复用户id
	TLastReplyTime	DATETIME	DEFAULT CURRENT_TIMESTAMP
	);


CREATE TABLE BbsReply(#跟帖表
	RID 			INT 		auto_increment	PRIMARY KEY,#跟帖表ID
	RTID			INT 		NOT	NULL,					#回复主贴ID
	RSID			INT 		NOT	NULL,					#所在版块ID
	RUID			INT 		NOT	NULL,					#发表人ID
	TEmotion		VARCHAR(20)	NOT	NULL,					#发表表情
	RContent		VARCHAR(20)	NOT	NULL,					#回帖内容
	RTime			DATETIME	NOT	NULL DEFAULT CURRENT_TIMESTAMP#回帖时间
	);

alter table bbssession modify SID INT auto_increment PRIMARY KEY;
alter table bbsuser modify UID INT auto_increment PRIMARY KEY;
alter table bbstopic modify TID INT auto_increment PRIMARY KEY;
alter table bbsreply modify RID INT auto_increment PRIMARY KEY;

insert into bbssession (SName,SMasterID)values('论坛首页',1);
insert into bbssession (SName,SMasterID)values('切换版块',2);
insert into bbssession (SName,SMasterID)values('荣誉殿堂',3);
insert into bbssession (SName,SMasterID)values('积分商店',4);
insert into bbssession (SName,SMasterID)values('实名认证',5);

