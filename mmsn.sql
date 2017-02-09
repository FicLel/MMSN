create database MMSN

DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
use MMSN;
/* Tipo de usuarios para el correspondiente permiso a ellos */ 
create table tipo_usua(
	id_tipo_usua int AUTO_INCREMENT not null,
    nomb_tipo varchar(255) not null,
    constraint primary key (id_tipo_usua)
)
ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/* Tabla para registro de los grados correspondientes */
create table grados(
	id_grado int auto_increment not null,
    nombre_grado varchar(20),
    constraint primary key (id_grado)
)
ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/* Tabla para el registro de docentes */
create table docentes(
	id_docen int auto_increment not null,
    nombre_docen varchar(255),
    edad numeric,
    estado_civil varchar(100),
    nacionalidad varchar(255),
    fecha_nacimiento date,
    direcccion varchar(255),
    tel_casa varchar(10),
    tel_cel varchar(10),
    tel_trab varchar(10),
    dui varchar(10),
    nit varchar(20),
    lugar_fecha_dui varchar(100),
    NIP varchar(10),
    ISSS varchar(10),
    docencia varchar(100),
    categoria varchar(10),
    nivel varchar(10),
    horas_trabajo numeric,
    dias_trabajo varchar(10),
    asignaturas_impartidas varchar(100),
    horario varchar(100),
    sueldo numeric,
    fecha_ingreso date,
    titulo varchar(100),
    lugar_tel_trabajo_tarde varchar(250),
    direccion_trabajo_pt varchar(250),
    tel_emergencia varchar(100),
    enfermedad varchar(100),
    medicamento varchar(100),
    alergia varchar(100),
    foto LONGBLOB,
    constraint primary key (id_docen)
)
ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/* Tabla para el registro de alumnas*/
create table alumnas(
	id_alum int auto_increment,
    nomb_alum varchar(255),
    fecha_nac date,
    grado_ingreso int,
    escuela_procedencia varchar(50),
    nomb_padre varchar(255),
    dui_padre varchar(10),
    profesion_padre varchar(255),
    nomb_madre varchar(255),
    dui_madre varchar(10),
    profesion_madre varchar(255),
    matrimonio varchar(255),
    direccion_alum varchar(255),
    direccion_padr varchar(255),
    tel_hab varchar(10),
    tel_cel varchar(10),
    tel_ofi_pad varchar(10),
    tel_ofi_mad varchar(10),
    religion varchar(20),
    bautismo int,
    primera_comunion int,
    confirma int,
    responsable varchar(10),
    nombre_responsable varchar(10),
    enfermedad varchar(100),
    medicamento varchar(100),
    foto LONGBLOB,
    constraint primary key (id_alum),
    constraint foreign key (grado_ingreso) references grados(id_grado)
)
ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/* Tabla de asignación de usuarios, recordando que un usuario puede ser tanto un profesor como un alumno o ninguna
	de estas dos*/
create table  usuarios(
	id_usua int auto_increment,
    docen int,
    alum int,
    nombre_acce varchar(255),
    tipo_usua int,
    acceso varchar(255),
    constraint primary key (id_usua),
    foreign key (docen) references docentes(id_docen),
    foreign key (alum) references alumnas(id_alum),
    foreign key (tipo_usua) references tipo_usua(id_tipo_usua)
)
ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/* Tabla para el registro de materias*/
create table materias(
	id_materia int auto_increment,
    nomb_materia varchar(255),
    primary key (id_materia)
)
ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/* en la asignación de materias se puede asignar la misma materia a diferentes maestros */
create table asig_materias(
	id_asig_m int auto_increment,
    materia int,
    grado int,
    docen_encargado int,
    constraint primary key (id_asig_m),
    constraint foreign key (materia) references materias(id_materia),
    constraint foreign key (grado) references grados(id_grado),
    constraint foreign key (docen_encargado) references docentes(id_docen)
)
ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

create table asig_grados(
	id_asig_g int auto_increment,
    grado int,
    docen_encargado int,
    constraint primary key (id_asig_g),
    constraint foreign key (grado) references grados(id_grado),
    constraint foreign key (docen_encargado) references docentes(id_docen)
)
ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

create table periodo_tiempo(
	id_periodo int auto_increment,
    nombre_periodo varchar(255),
    fech_ini date,
    fech_fin date,
    estado int,
    constraint primary key (id_periodo)
)
ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

create table tipo_perfil(
	id_tipo_perf int auto_increment,
    nomb_tipo varchar(255),
    constraint primary key (id_tipo_perf)
)
ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

create table perfil(
	id_perf int auto_increment,
    desc_perf varchar(1000),
    porcentaje numeric,
    fecha_fin date,
    periodo int,
    materia int, /* Esta materia se saca de la asignación y se tomará cuando el maestro ingrese el perfil*/
    constraint primary key (id_perf),
    constraint foreign key (periodo) references periodo_tiempo(id_periodo),
    constraint foreign key (materia) references asig_materias(id_asig_m)
)
ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

create table notas_perfil(
	id_nota_perf int auto_increment,
    perfil int, /* Se toma la nota del perfil luego por medio de una consulta se hará la formula y el % final*/
	nota numeric,
    alumno int,
    constraint primary key (id_nota_perf),
    constraint foreign key (perfil) references perfil(id_perf),
    constraint foreign key (alumno) references alumnas(id_alum)
)
ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
create table notas(
	id_nota int auto_increment,
    nota numeric,
    periodo int,
    alumno int,
    constraint primary key (id_nota),
    constraint foreign key (periodo) references periodo_tiempo(id_periodo),
    constraint foreign key (alumno) references alumnas(id_alum)
)
ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/* En esta tabla se asignará a que grado pertenece para así cargar las materias correspondientes por grado  */
create table grados_asign_alumn(
	id_asign int auto_increment,
    alumn int,
    grado int,
    constraint primary key (id_asign),
	constraint foreign key (alumn) references alumnas(id_alum),
    constraint foreign key (grado) references grados(id_grado)
)
ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


alter table perfil add tipo_perf int;
alter table perfil add constraint foreign key (tipo_perf) references tipo_perfil(id_tipo_perf);

