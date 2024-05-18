<article id="form_promotions">
    <form method="post" action="insert/insert_promotions.php" enctype="multipart/form-data">
        <div class="fields">
            <div class="field">
                <label for="code">Codigo</label>
                <input type="text" name="code" id="code" placeholder="ej: GOL-001">
            </div>
            <div class="field half">
                <label for="start_date">Fecha de inicio</label>
                <input type="datetime-local" name="start_date" id="start_date" placeholder="dd/mm/aaaa hh:mm">
            </div>
            <div class="field half">
                <label for="end_date">Fecha de finalizacion</label>
                <input type="datetime-local" name="end_date" id="end_date" placeholder="dd/mm/aaaa hh:mm">
            </div>
            <div class="field">
                <label for="description">Descripcion</label>
                <textarea name="description" id="description" rows="6"
                    placeholder="Descripcion de la promocion"></textarea>
            </div>
            <div class="field half">
                <label for="image">Imagen</label>
                <input type="file" name="image" id="image" placeholder="Imagen de la promocion" accept="image/jpeg">
            </div>
        </div>
        <ul class="actions">
            <li><input type="submit" name="submit_promotion" value="Agregar" class="primary"></li>
            <li><input type="reset" value="Limpiar"></li>
        </ul>
    </form>
</article>