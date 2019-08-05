            <section>
                <h1 class="text-center">Alunos Cadastrados</h1>
                <div class="container">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>RA</th>
                                <th>NOME</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($alunos as $aluno) : ?>
                            <tr>
                                <td><?= $aluno['raAluno'] ?></td>
                                <td><?= $aluno['nomeAluno'] ?></td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </section>