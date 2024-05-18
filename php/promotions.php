<article id="promotions">
                <h3 class="major">Tabla de Promociones</h3>
                <section>
                    <ul class="actions">
                        <li><a href="#form_promotions" class="button primary icon solid fa-plus">Promocion</a></li>
                    </ul>
                </section>
                <div class="table-wrapper">
                    <table>
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Codigo</th>
                                <th>Inicio</th>
                                <th>Fin</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require_once 'config/bdconection.php';
                            $query = "SELECT * FROM promotions";
                            $query_run = mysqli_query($conn, $query);
                            $count = 1;
                            $rows = [];
                            while ($row = mysqli_fetch_array($query_run)) {
                                $rows[] = $row;
                            }
                            foreach ($rows as $row):
                            ?>
                            <tr>
                                <td><?php echo htmlspecialchars($count); ?></td>
                                <td><?php echo htmlspecialchars($row['p_code']); ?></td>
                                <td><?php echo htmlspecialchars($row['start_date']); ?></td>
                                <td><?php echo htmlspecialchars($row['end_date']); ?></td>
                                <td><?php echo htmlspecialchars($row['p_active']); ?></td>
                                <td>
                                    <ul class="icons">
                                        <li><a href="#" class="icon fal fa-edit"><span class="label">Editar</span></a>
                                        </li>
                                        <li><a href="#" class="icon fal fa-eye"><span class="label">Ver</span></a></li>
                                        <li><a href="#" class="icon fal fa-check-square"><span
                                                    class="label">Activar</span></a></li>
                                        <li><a href="#" class="icon fal fa-trash-alt"><span
                                                    class="label">Desactivar</span></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <?php
                            $count++;
                            endforeach;
                            //close connection
                            mysqli_close($conn);                            
                            ?>                                                        
                        </tbody>
                    </table>
                </div>
            </article>