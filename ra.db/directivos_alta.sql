INSERT INTO usuario(
    usua_login, 
    usua_contrasena, 
    usua_nombre, 
    usua_apaterno, 
    usua_amaterno, 
    usua_correo, 
    usua_puesto, 
    usua_tipo,
    usua_visible, 
    usua_fecha_movimiento, 
    usua_motivo_movimiento,
    usua_fs_cata_estatus,
    usua_fk_usuario_movimiento) 
VALUES 
    ('itzel.ramos', MD5('itzel.ramos'), 'Itzel', 'Ramos', 'Rodriguez', 'itzel.ramos.rod@hotmail.com', 'Administrador', 'A', '1', NOW(), 'Nuevo Registro',1,1);

INSERT INTO usuario(
    usua_login, 
    usua_contrasena, 
    usua_nombre, 
    usua_apaterno, 
    usua_amaterno, 
    usua_correo, 
    usua_puesto, 
    usua_tipo,
    usua_visible, 
    usua_fecha_movimiento, 
    usua_motivo_movimiento,
    usua_fs_cata_estatus,
    usua_fk_usuario_movimiento) 
VALUES 
    ('eric.uribe', MD5('eric.uribe'), 'Eric', 'Uribe', 'Alonso', 'atencoindependiente@gmail.com', 'Administrador', 'A', '1', NOW(), 'Nuevo Registro',1,1);