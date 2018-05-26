ALTER TABLE congregation
ADD COLUMN may1 int(128) not null AFTER apr5,
ADD COLUMN may2 int(128) not null AFTER may1,
ADD COLUMN may3 int(128) not null AFTER may2,
ADD COLUMN may4 int(128) not null AFTER may3,
ADD COLUMN may5 int(128) not null AFTER may4