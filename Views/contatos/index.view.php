<section class="flex">
    <?php require base_path('views/partials/_sidebar.view.php'); ?>

    <main class="w-full mx-auto max-w-1192 py-20">
        <?php require base_path('views/partials/_mensage.view.php'); ?>
        <div class="flex flex-col h-full max-h-[750px] bg-secondary/40 px-10 rounded-[40px] overflow-y-auto">
            <nav class="w-full flex justify-between items-center p-10 gap-3">
                <div class="text-heading leading-heading text-content-primary font-bold">Lista de contatos</div>

                <div class="flex gap-3">
                    <?php require base_path('views/partials/_buscarContato.view.php'); ?>

                    <?php require base_path('views/partials/_cadastroContato.view.php'); ?>

                    <?php require base_path('views/partials/_visualizarContato.view.php'); ?>
                </div>
            </nav>
            <div class="flex w-full gap-12">
                <div class="w-14 h-full flex flex-col px-5 py-5 gap-3 rounded-3xl bg-brand">
                    <form action="/contatos" class="leading-5 text-center">
                        <button name="pesquisaPorLetra" value="<?= request()->get('pesquisar1', 'A'); ?>" class="text-medium font-bold opacity-70 text-content-muted no-underline p-0">A</button>
                        <button name="pesquisaPorLetra" value="<?= request()->get('pesquisar2', 'B'); ?>" class="text-medium font-bold opacity-70 text-content-muted no-underline p-0">B</button>
                        <button name="pesquisaPorLetra" value="<?= request()->get('pesquisar3', 'C'); ?>" class="text-large font-bold text-content-inverse no-underline p-0">C</button>
                        <button name="pesquisaPorLetra" value="<?= request()->get('pesquisar4', 'D'); ?>" class="text-medium font-bold opacity-70 text-content-muted no-underline p-0">D</button>
                        <button name="pesquisaPorLetra" value="<?= request()->get('pesquisar5', 'E'); ?>" class="text-medium font-bold opacity-70 text-content-muted no-underline p-0">E</button>
                        <button name="pesquisaPorLetra" value="<?= request()->get('pesquisar6', 'F'); ?>" class="text-medium font-bold opacity-70 text-content-muted no-underline p-0">F</button>
                        <button name="pesquisaPorLetra" value="<?= request()->get('pesquisar7', 'G'); ?>" class="text-medium font-bold opacity-70 text-content-muted no-underline p-0">G</button>
                        <button name="pesquisaPorLetra" value="<?= request()->get('pesquisar8', 'H'); ?>" class="text-medium font-bold opacity-70 text-content-muted no-underline p-0">H</button>
                        <button name="pesquisaPorLetra" value="<?= request()->get('pesquisar9', 'I'); ?>" class="text-medium font-bold opacity-70 text-content-muted no-underline p-0">I</button>
                        <button name="pesquisaPorLetra" value="<?= request()->get('pesquisar10', 'J'); ?>" class="text-medium font-bold opacity-70 text-content-muted no-underline p-0">J</button>
                        <button name="pesquisaPorLetra" value="<?= request()->get('pesquisar11', 'K'); ?>" class="text-medium font-bold opacity-70 text-content-muted no-underline p-0">K</button>
                        <button name="pesquisaPorLetra" value="<?= request()->get('pesquisar12', 'L'); ?>" class="text-medium font-bold opacity-70 text-content-muted no-underline p-0">L</button>
                        <button name="pesquisaPorLetra" value="<?= request()->get('pesquisar13', 'M'); ?>" class="text-medium font-bold opacity-70 text-content-muted no-underline p-0">M</button>
                        <button name="pesquisaPorLetra" value="<?= request()->get('pesquisar14', 'N'); ?>" class="text-medium font-bold opacity-70 text-content-muted no-underline p-0">N</button>
                        <button name="pesquisaPorLetra" value="<?= request()->get('pesquisar15', 'O'); ?>" class="text-medium font-bold opacity-70 text-content-muted no-underline p-0">O</button>
                        <button name="pesquisaPorLetra" value="<?= request()->get('pesquisar16', 'P'); ?>" class="text-medium font-bold opacity-70 text-content-muted no-underline p-0">P</button>
                        <button name="pesquisaPorLetra" value="<?= request()->get('pesquisar17', 'Q'); ?>" class="text-medium font-bold opacity-70 text-content-muted no-underline p-0">Q</button>
                        <button name="pesquisaPorLetra" value="<?= request()->get('pesquisar18', 'R'); ?>" class="text-medium font-bold opacity-70 text-content-muted no-underline p-0">R</button>
                        <button name="pesquisaPorLetra" value="<?= request()->get('pesquisar19', 'S'); ?>" class="text-medium font-bold opacity-70 text-content-muted no-underline p-0">S</button>
                        <button name="pesquisaPorLetra" value="<?= request()->get('pesquisar20', 'T'); ?>" class="text-medium font-bold opacity-70 text-content-muted no-underline p-0">T</button>
                        <button name="pesquisaPorLetra" value="<?= request()->get('pesquisar21', 'U'); ?>" class="text-medium font-bold opacity-70 text-content-muted no-underline p-0">U</button>
                        <button name="pesquisaPorLetra" value="<?= request()->get('pesquisar22', 'V'); ?>" class="text-medium font-bold opacity-70 text-content-muted no-underline p-0">V</button>
                        <button name="pesquisaPorLetra" value="<?= request()->get('pesquisar23', 'W'); ?>" class="text-medium font-bold opacity-70 text-content-muted no-underline p-0">W</button>
                        <button name="pesquisaPorLetra" value="<?= request()->get('pesquisar24', 'X'); ?>" class="text-medium font-bold opacity-70 text-content-muted no-underline p-0">X</button>
                        <button name="pesquisaPorLetra" value="<?= request()->get('pesquisar25', 'Y'); ?>" class="text-medium font-bold opacity-70 text-content-muted no-underline p-0">Y</button>
                        <button name="pesquisaPorLetra" value="<?= request()->get('pesquisar26', 'Z'); ?>" class="text-medium font-bold opacity-70 text-content-muted no-underline p-0">Z</button>
                    </form>
                </div>
                <div class="w-full flex flex-col gap-7">
                    <div class="w-full flex flex-col text-medium leading-medium font-bold text-content-primary gap-5">
                        <input disabled type="text" class="bg-transparent" value="<?= request()->get('pesquisaPorLetra'); ?>">
                        <div class="border-b border-b-primary opacity-20"></div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="table">
                            <!-- head -->
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Telefone</th>
                                    <th>Email</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($contatos as $contato) : ?>
                                    <!-- row 1 -->
                                    <tr class="border-b border-b-primary border-opacity-20 p-3">
                                        <?php require base_path('views/partials/_contatos.view.php'); ?>

                                        <th>
                                            <div class="flex justify-end items-center gap-2">
                                                <?php require base_path('views/partials/_editarContato.view.php'); ?>

                                                <?php require base_path('views/partials/_visualizarContatoId.view.php'); ?>

                                                <?php require base_path('views/partials/_DeletarContato.view.php'); ?>
                                            </div>
                                        </th>
                                    </tr>
                                <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
</section>