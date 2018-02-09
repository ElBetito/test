        <h1 class="title">Dashboard</h1>

        <div class="well well-sm text-right">
            <a class="button is-primary is-outlined" href="?c=User&a=NewOrEdit">New user</a>
        </div>

        <div class="bd-snippet">
            <div class="bd-snippet-preview">
                <table class="table">
                    <thead>
                        <tr>
                            <th><abbr>Email</abbr></th>
                            <th><abbr>Birthdate</abbr></th>
                            <th><abbr>Phone</abbr></th>
                            <th><abbr>Company</abbr></th>
                            <th><abbr>Action</abbr></th>
                            <th><abbr>Action</abbr></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($this->model->All() as $user) : ?>
                            <tr>
                                <td><?php echo $user->email; ?></td>
                                <td><?php echo $user->birthdate; ?></td>
                                <td><?php echo $user->phone; ?></td>
                                <td><?php echo $user->company; ?></td>
                                <td>
                                    <a v-if="auth.role === 'admin'" class="button is-warning" href="?c=User&a=NewOrEdit&id=<?php echo $user->id; ?>">Editar</a>
                                </td>
                                <td>
                                    <a v-if="auth.role === 'admin'" class="button is-danger" onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=User&a=Delete&id=<?php echo $user->id; ?>">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table> 
            </div>
        </div>