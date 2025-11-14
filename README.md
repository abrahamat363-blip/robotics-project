# Robotics Project

## Descripción
Proyecto para la gestión de cursos y kits de robótica.  
Permite registrar usuarios con distintos roles (Administrativo, Teacher y Student), crear cursos, asignar profesores y gestionar kits de robótica.

## ER Diagram
![ER Diagram](docs/er_diagram.png)
> Asegúrate de haber generado tu diagrama ER con alguna herramienta (por ejemplo [dbdiagram.io](https://dbdiagram.io/)) y guardar la imagen en `docs/er_diagram.png`.

---

## Detalles del Proyecto

- **Usuarios**: 3 tipos (Administrative, Teacher, Student)  
- **Kits de robótica**: 3 kits de prueba  
- **Cursos**: 100 cursos generados con FakerPHP  
- **Relaciones**: Cada curso está asociado a un profesor (Teacher)  

---

## Migraciones y Seeders

- Ejecuta las migraciones para crear las tablas:

```bash
php artisan migrate
