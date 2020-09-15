# CodeIgniter 4 Model Generator

## Config

create .env file

default content

```
makemodel.primaryKey = id
makemodel.returnType = array
makemodel.useTimestamps = true
makemodel.createdField = created_at
makemodel.updatedField = updated_at
makemodel.useSoftDeletes = false
makemodel.deletedField = deleted_at
```

## Usage

```
php spark make:model
```

then input your table name, the model file will be generated
