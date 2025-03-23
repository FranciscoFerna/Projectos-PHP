# ITBFlix - Optimización de Código con PHP

## Descripción del Proyecto

ITBFlix es un sitio web de streaming de películas y series que ha sido optimizado mediante la implementación de PHP. Este proyecto demuestra cómo se puede reducir la duplicidad de código en un sitio web estático HTML, transformándolo en una aplicación más modular y mantenible usando PHP.

## Optimización Implementada

El objetivo principal de esta optimización ha sido eliminar la redundancia de código y mejorar la mantenibilidad del sitio web. Para lograr esto:

1. **Transformación de HTML a PHP**: Se han convertido todos los archivos HTML a PHP para aprovechar sus capacidades de inclusión de código.

2. **Estructura Modular**: Se ha creado una estructura de carpetas organizada:
   - `includes/`: Contiene componentes reutilizables
   - Páginas principales en la raíz del proyecto

3. **Componentes Reutilizables**:
   - `head.php`: Metadatos, títulos, enlaces CSS
   - `header.php`: Barra de navegación superior
   - `footer.php`: Pie de página

4. **Variables Dinámicas**:
   - Títulos personalizados por página
   - Metadescripciones específicas
   - Año actualizado automáticamente en el copyright

## Beneficios de la Optimización

- **Reducción de Duplicidad**: Elementos comunes como header, footer y metadatos solo se definen una vez.
- **Mantenimiento Simplificado**: Cambios en elementos comunes solo requieren modificar un archivo.
- **Coherencia Visual**: Garantiza que todas las páginas mantengan el mismo estilo y estructura.
- **Desarrollo Ágil**: Facilita la adición de nuevas páginas que mantienen la consistencia del sitio.

## Funcionalidades Adicionales

Se han implementado algunas funcionalidades extra para demostrar el potencial de PHP:

- **Procesamiento de Formularios**: El código para procesar el formulario de registro (`procesar_registro.php`) se ha adaptado de ejemplos disponibles en internet para mostrar cómo se podría implementar la validación y procesamiento de datos.
- **Página de Éxito de Registro**: Se ha creado una página de confirmación tras el registro con estilos personalizados.

> Nota: El procesamiento del formulario es una implementación básica con fines demostrativos, adaptada de ejemplos disponibles en internet. En un entorno de producción, se recomienda implementar medidas adicionales de seguridad.

## Instalación y Ejecución

Para ejecutar este proyecto, necesitas:

1. Un servidor web con soporte para PHP (Apache, Nginx, etc.)
2. PHP 7.4 o superior

Pasos para la instalación:

```bash
# Clonar el repositorio (o descargar los archivos)
git clone https://url-del-repositorio/itbflix.git

# Mover los archivos a la carpeta de tu servidor web
# Ejemplo para Apache en Ubuntu:
sudo cp -r itbflix/ /var/www/html/

# Configurar permisos si es necesario
sudo chown -R www-data:www-data /var/www/html/itbflix/
