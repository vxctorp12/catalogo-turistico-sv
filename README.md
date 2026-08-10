# Catálogo Turístico de El Salvador

Este es un catálogo web simple desarrollado en Laravel que muestra diversos lugares turísticos de El Salvador, utilizando archivos JSON como fuente de datos en lugar de una base de datos tradicional.

## Instrucciones de Instalación

Sigue estos pasos para levantar el proyecto en tu entorno local:

1. **Clonar el repositorio:**
   ```bash
   git clone https://github.com/vxctorp12/catalogo-turistico-sv.git
   cd catalogo-turistico
   ```

2. **Instalar dependencias de PHP:**
   ```bash
   composer install
   ```

3. **Configurar el entorno:**
   Copia el archivo de ejemplo para crear tu propio archivo `.env`:
   ```bash
   cp .env.example .env
   ```
   > **Nota:** Si estás usando Windows, asegúrate de que la variable `SESSION_DRIVER` en el archivo `.env` esté configurada como `SESSION_DRIVER=file` para evitar errores con SQLite.

4. **Generar la llave de la aplicación:**
   ```bash
   php artisan key:generate
   ```

5. **Levantar el servidor local:**
   ```bash
   php artisan serve
   ```
   Accede a la aplicación desde tu navegador en: `http://localhost:8000`

## Descripción del Flujo MVC Implementado

Para este proyecto, el patrón **Modelo-Vista-Controlador (MVC)** se adaptó para trabajar con datos estáticos:

* **Modelo (Datos):** En lugar de utilizar Eloquent y una base de datos relacional, la capa de datos es manejada por un archivo estático `destinos.json` ubicado en `storage/app/`.
* **Controlador (`DestinoController`):** Actúa como intermediario. Lee el archivo JSON utilizando el Facade `Storage` (o `file_get_contents`), decodifica los datos en un arreglo asociativo y contiene la lógica para enviar la lista completa al catálogo o buscar un destino específico por su `id` para la vista de detalles.
* **Vista (Blade Templates):** Reciben los datos procesados por el controlador. `index.blade.php` itera sobre el arreglo para generar las tarjetas del catálogo, mientras que `show.blade.php` renderiza la información detallada y el formulario de contacto de un lugar específico.

## Capturas de Pantalla

### Catálogo Principal
![Vista del catálogo principal de destinos](public/img/index.png)

### Detalle del Destino
![Vista de los detalles y formulario de contacto 1](public/img/details-1.png)
![Vista de los detalles y formulario de contacto 2](public/img/details-2.png)

## Archivos Clave del Proyecto

* **Datos de prueba (JSON):** La información que alimenta la aplicación se encuentra estructurada en `storage/app/destinos.json`.
* **Configuración de Git:** El repositorio incluye un archivo `.gitignore` estandarizado para proyectos Laravel, asegurando que no se suban dependencias ni variables de entorno sensibles.