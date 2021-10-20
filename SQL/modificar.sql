-- RENOMBRAR UNA TABLA
ALTER TABLE usuarios RENAME TO usuarios_renom / 

-- CAMBIAR NOMBRE DE UNA COLUMNA # 
ALTER TABLE usuarios_renom CHANGE apellidos apellido varchar(100) null;

-- MODIFICAR COLUMNA SIN CAMBIAR NOMBRE #
ALTER TABLE usuarios renom MODIFY apellido char (40) not null;

-- ARADIE COLUMNA 
ALTER TABLE usuarios renom ADD website varchar(100) null;

-- ABADER RESTRICION A COLUMNA # 
ALTER TABLE usuarios renom ADD CONSTRAINT uq_email UNIQUE (email);

-- BORRAR UNA CULUMNA
ALTER TABLE usuarios_renom DROP website;