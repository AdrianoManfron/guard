<section class="flex">
    <?php require base_path('views/partials/_sidebar.view.php'); ?>

    <main class="w-full mx-auto max-w-1192 py-20">
        <?php require base_path('views/partials/_mensage.view.php'); ?>
        <div class="flex flex-col h-full max-h-[750px] bg-secondary/40 px-10 rounded-[40px] overflow-y-auto">
            <nav class="w-full flex justify-between items-center p-10 gap-3">
                <div class="text-heading leading-heading text-content-primary font-bold">Minhas informações</div>
            </nav>
            <div class="flex w-full gap-12">
                <?php require base_path('views/partials/_mensage.view.php'); ?>
                <div class="w-full flex flex-col gap-7">
                    <form action="/perfil" method="post" enctype="multipart/form-data">
                        <?php $validacoes = flash()->get('validacoes'); ?>
                        <div class="flex flex-col gap-3 justify-center items-center">
                            <div class="card">
                                <div class="card-body p-0 gap-5">
                                    <label class="form-control">
                                        <div class="w-full flex flex-col justify-center items-center gap-5">
                                            <div class="w-16 h-16 flex justify-center items-center bg-secondary rounded-xl">
                                                <?php if (! $usuario[0]->avatar) : ?>
                                                    <svg width="41" height="41" viewBox="0 0 41 41" class="fill-content-muted" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M10.2497 29C11.6663 27.9166 13.2497 27.0625 14.9997 26.4375C16.7497 25.8125 18.583 25.5 20.4997 25.5C22.4163 25.5 24.2497 25.8125 25.9997 26.4375C27.7497 27.0625 29.333 27.9166 30.7497 29C31.7219 27.8611 32.4788 26.5694 33.0205 25.125C33.5622 23.6805 33.833 22.1389 33.833 20.5C33.833 16.8055 32.5344 13.6597 29.9372 11.0625C27.34 8.46526 24.1941 7.16665 20.4997 7.16665C16.8052 7.16665 13.6594 8.46526 11.0622 11.0625C8.46495 13.6597 7.16634 16.8055 7.16634 20.5C7.16634 22.1389 7.43717 23.6805 7.97884 25.125C8.52051 26.5694 9.27745 27.8611 10.2497 29ZM20.4997 22.1666C18.8608 22.1666 17.4788 21.6041 16.3538 20.4791C15.2288 19.3541 14.6663 17.9722 14.6663 16.3333C14.6663 14.6944 15.2288 13.3125 16.3538 12.1875C17.4788 11.0625 18.8608 10.5 20.4997 10.5C22.1386 10.5 23.5205 11.0625 24.6455 12.1875C25.7705 13.3125 26.333 14.6944 26.333 16.3333C26.333 17.9722 25.7705 19.3541 24.6455 20.4791C23.5205 21.6041 22.1386 22.1666 20.4997 22.1666ZM20.4997 37.1666C18.1941 37.1666 16.0275 36.7291 13.9997 35.8541C11.9719 34.9792 10.208 33.7917 8.70801 32.2916C7.20801 30.7916 6.02051 29.0278 5.14551 27C4.27051 24.9722 3.83301 22.8055 3.83301 20.5C3.83301 18.1944 4.27051 16.0278 5.14551 14C6.02051 11.9722 7.20801 10.2083 8.70801 8.70831C10.208 7.20831 11.9719 6.02081 13.9997 5.14581C16.0275 4.27081 18.1941 3.83331 20.4997 3.83331C22.8052 3.83331 24.9719 4.27081 26.9997 5.14581C29.0275 6.02081 30.7913 7.20831 32.2913 8.70831C33.7913 10.2083 34.9788 11.9722 35.8538 14C36.7288 16.0278 37.1663 18.1944 37.1663 20.5C37.1663 22.8055 36.7288 24.9722 35.8538 27C34.9788 29.0278 33.7913 30.7916 32.2913 32.2916C30.7913 33.7917 29.0275 34.9792 26.9997 35.8541C24.9719 36.7291 22.8052 37.1666 20.4997 37.1666Z" />
                                                    </svg>
                                                <?php else : ?>
                                                    <img
                                                        src="<?= $usuario[0]->avatar ?>"
                                                        alt="Avatar do contato"
                                                        class="rounded-xl w-16 h-16" />
                                                <?php endif; ?>
                                            </div>
                                            <label for="avatar" class="btn btn-primary text-small leading-small text-content-primary p-2 min-h-4 h-9 border-content-muted bg-secondary hover:bg-tertiary hover:border-primary cursor-pointer">
                                                + Substituir foto
                                                <input type="file" name="avatar" id="avatar" class="hidden" />
                                            </label>
                                        </div>
                                    </label>
                                    <label class="form-control">
                                        <div class="label">
                                            <span class="label-text text-label-medium text-content-primary">Nome</span>
                                        </div>
                                        <input
                                            type="text"
                                            name="nome"
                                            value="<?= $usuario[0]->nome ?>"
                                            placeholder="Digite o seu nome"
                                            class="input bg-secondary border-primary text-content-placeholder w-full" />
                                        <?php if (isset($validacoes['nome'])) { ?>
                                            <div class="label justify-start gap-1 text-xs text-medium leading-small text-red">
                                                <svg width="16" height="16" viewBox="0 0 24 24" class="fill-red" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 13.4L14.9 16.3C15.0833 16.4833 15.3167 16.575 15.6 16.575C15.8833 16.575 16.1167 16.4833 16.3 16.3C16.4833 16.1167 16.575 15.8833 16.575 15.6C16.575 15.3167 16.4833 15.0833 16.3 14.9L13.4 12L16.3 9.1C16.4833 8.91667 16.575 8.68333 16.575 8.4C16.575 8.11667 16.4833 7.88333 16.3 7.7C16.1167 7.51667 15.8833 7.425 15.6 7.425C15.3167 7.425 15.0833 7.51667 14.9 7.7L12 10.6L9.1 7.7C8.91667 7.51667 8.68333 7.425 8.4 7.425C8.11667 7.425 7.88333 7.51667 7.7 7.7C7.51667 7.88333 7.425 8.11667 7.425 8.4C7.425 8.68333 7.51667 8.91667 7.7 9.1L10.6 12L7.7 14.9C7.51667 15.0833 7.425 15.3167 7.425 15.6C7.425 15.8833 7.51667 16.1167 7.7 16.3C7.88333 16.4833 8.11667 16.575 8.4 16.575C8.68333 16.575 8.91667 16.4833 9.1 16.3L12 13.4ZM12 22C10.6167 22 9.31667 21.7375 8.1 21.2125C6.88333 20.6875 5.825 19.975 4.925 19.075C4.025 18.175 3.3125 17.1167 2.7875 15.9C2.2625 14.6833 2 13.3833 2 12C2 10.6167 2.2625 9.31667 2.7875 8.1C3.3125 6.88333 4.025 5.825 4.925 4.925C5.825 4.025 6.88333 3.3125 8.1 2.7875C9.31667 2.2625 10.6167 2 12 2C13.3833 2 14.6833 2.2625 15.9 2.7875C17.1167 3.3125 18.175 4.025 19.075 4.925C19.975 5.825 20.6875 6.88333 21.2125 8.1C21.7375 9.31667 22 10.6167 22 12C22 13.3833 21.7375 14.6833 21.2125 15.9C20.6875 17.1167 19.975 18.175 19.075 19.075C18.175 19.975 17.1167 20.6875 15.9 21.2125C14.6833 21.7375 13.3833 22 12 22Z" />
                                                </svg>
                                                <?= $validacoes['nome'][0] ?>
                                            </div>
                                        <?php } ?>
                                    </label>
                                    <label class="form-control">
                                        <div class="label">
                                            <span class="label-text text-label-medium text-content-primary">Email</span>
                                        </div>
                                        <input
                                            type="text"
                                            name="email"
                                            value="<?= $usuario[0]->email ?>"
                                            placeholder="Digite o seu email"
                                            class="input bg-secondary border-primary text-content-placeholder w-full" />
                                        <?php if (isset($validacoes['email'])) { ?>
                                            <div class="label justify-start gap-1 text-xs text-medium leading-small text-red">
                                                <svg width="16" height="16" viewBox="0 0 24 24" class="fill-red" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 13.4L14.9 16.3C15.0833 16.4833 15.3167 16.575 15.6 16.575C15.8833 16.575 16.1167 16.4833 16.3 16.3C16.4833 16.1167 16.575 15.8833 16.575 15.6C16.575 15.3167 16.4833 15.0833 16.3 14.9L13.4 12L16.3 9.1C16.4833 8.91667 16.575 8.68333 16.575 8.4C16.575 8.11667 16.4833 7.88333 16.3 7.7C16.1167 7.51667 15.8833 7.425 15.6 7.425C15.3167 7.425 15.0833 7.51667 14.9 7.7L12 10.6L9.1 7.7C8.91667 7.51667 8.68333 7.425 8.4 7.425C8.11667 7.425 7.88333 7.51667 7.7 7.7C7.51667 7.88333 7.425 8.11667 7.425 8.4C7.425 8.68333 7.51667 8.91667 7.7 9.1L10.6 12L7.7 14.9C7.51667 15.0833 7.425 15.3167 7.425 15.6C7.425 15.8833 7.51667 16.1167 7.7 16.3C7.88333 16.4833 8.11667 16.575 8.4 16.575C8.68333 16.575 8.91667 16.4833 9.1 16.3L12 13.4ZM12 22C10.6167 22 9.31667 21.7375 8.1 21.2125C6.88333 20.6875 5.825 19.975 4.925 19.075C4.025 18.175 3.3125 17.1167 2.7875 15.9C2.2625 14.6833 2 13.3833 2 12C2 10.6167 2.2625 9.31667 2.7875 8.1C3.3125 6.88333 4.025 5.825 4.925 4.925C5.825 4.025 6.88333 3.3125 8.1 2.7875C9.31667 2.2625 10.6167 2 12 2C13.3833 2 14.6833 2.2625 15.9 2.7875C17.1167 3.3125 18.175 4.025 19.075 4.925C19.975 5.825 20.6875 6.88333 21.2125 8.1C21.7375 9.31667 22 10.6167 22 12C22 13.3833 21.7375 14.6833 21.2125 15.9C20.6875 17.1167 19.975 18.175 19.075 19.075C18.175 19.975 17.1167 20.6875 15.9 21.2125C14.6833 21.7375 13.3833 22 12 22Z" />
                                                </svg>
                                                <?= $validacoes['email'][0] ?>
                                            </div>
                                        <?php } ?>
                                    </label>
                                    <div class="card-actions justify-between">
                                        <a href="/contatos" type="reset" class="btn btn-primary bg-tertiary border-0 text-content-primary hover:bg-content-placeholder">Cancelar</a>
                                        <button class="btn btn-primary bg-brand border-brand text-content-inverse hover:bg-tertiary hover:text-content-primary hover:border-primary">Atualizar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</section>