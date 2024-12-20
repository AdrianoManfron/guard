<button <?php if (! session()->get('mostrar')) : ?> disabled <?php endif; ?> class="btn btn-primary text-small leading-small text-content-primary p-2 min-h-4 h-9 border-content-muted bg-secondary hover:bg-tertiary hover:border-primary" onclick="my_modal_<?= $contato->id ?>.showModal()">
    <svg width="10" height="9" viewBox="0 0 10 9" class="fill-white" xmlns="http://www.w3.org/2000/svg">
        <path d="M1.5 8.00006H2.2125L7.1 3.11256L6.3875 2.40006L1.5 7.28756V8.00006ZM1 9.00006C0.858333 9.00006 0.739583 8.95214 0.64375 8.85631C0.547917 8.76048 0.5 8.64173 0.5 8.50006V7.28756C0.5 7.15423 0.525 7.02714 0.575 6.90631C0.625 6.78548 0.695833 6.67923 0.7875 6.58756L7.1 0.287561C7.2 0.195894 7.31042 0.125061 7.43125 0.075061C7.55208 0.025061 7.67917 6.10352e-05 7.8125 6.10352e-05C7.94583 6.10352e-05 8.075 0.025061 8.2 0.075061C8.325 0.125061 8.43333 0.200061 8.525 0.300061L9.2125 1.00006C9.3125 1.09173 9.38542 1.20006 9.43125 1.32506C9.47708 1.45006 9.5 1.57506 9.5 1.70006C9.5 1.83339 9.47708 1.96048 9.43125 2.08131C9.38542 2.20214 9.3125 2.31256 9.2125 2.41256L2.9125 8.71256C2.82083 8.80423 2.71458 8.87506 2.59375 8.92506C2.47292 8.97506 2.34583 9.00006 2.2125 9.00006H1ZM6.7375 2.76256L6.3875 2.40006L7.1 3.11256L6.7375 2.76256Z" />
    </svg>
    Editar
</button>
<dialog id="my_modal_<?= $contato->id ?>" class="modal modal-bottom sm:modal-middle bg-content-primary/20">
    <div class="modal-box bg-primary bg-opacity-80">
        <div class="flex flex-col gap-1">
            <div>
                <form method="dialog">
                    <button class="btn btn-circle btn-ghost absolute right-2 top-2">✕</button>
                </form>
                <p class="text-heading leading-heading text-content-primary font-bold">Editar contato</p>
            </div>
            <div class="flex flex-col px-4 py-5 gap-4">
                <form action="/contato" method="POST" enctype="multipart/form-data" id="form-atualizacao-<?= $contato->id ?>">
                    <input type="hidden" name="__method" value="PUT" />
                    <input type="hidden" name="id" value="<?= $contato->id ?>" />
                    <div class="flex flex-col gap-3 justify-center items-center">
                        <div class="w-16 h-16 flex justify-center items-center bg-secondary rounded-xl">
                            <?php if ($contato->avatar) : ?>
                                <img
                                    src="<?= $contato->avatar ?>"
                                    alt="Avatar do contato"
                                    class="rounded-xl w-16 h-16" />
                            <?php else : ?>
                                <svg width="41" height="41" viewBox="0 0 41 41" class="fill-content-muted" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.2497 29C11.6663 27.9166 13.2497 27.0625 14.9997 26.4375C16.7497 25.8125 18.583 25.5 20.4997 25.5C22.4163 25.5 24.2497 25.8125 25.9997 26.4375C27.7497 27.0625 29.333 27.9166 30.7497 29C31.7219 27.8611 32.4788 26.5694 33.0205 25.125C33.5622 23.6805 33.833 22.1389 33.833 20.5C33.833 16.8055 32.5344 13.6597 29.9372 11.0625C27.34 8.46526 24.1941 7.16665 20.4997 7.16665C16.8052 7.16665 13.6594 8.46526 11.0622 11.0625C8.46495 13.6597 7.16634 16.8055 7.16634 20.5C7.16634 22.1389 7.43717 23.6805 7.97884 25.125C8.52051 26.5694 9.27745 27.8611 10.2497 29ZM20.4997 22.1666C18.8608 22.1666 17.4788 21.6041 16.3538 20.4791C15.2288 19.3541 14.6663 17.9722 14.6663 16.3333C14.6663 14.6944 15.2288 13.3125 16.3538 12.1875C17.4788 11.0625 18.8608 10.5 20.4997 10.5C22.1386 10.5 23.5205 11.0625 24.6455 12.1875C25.7705 13.3125 26.333 14.6944 26.333 16.3333C26.333 17.9722 25.7705 19.3541 24.6455 20.4791C23.5205 21.6041 22.1386 22.1666 20.4997 22.1666ZM20.4997 37.1666C18.1941 37.1666 16.0275 36.7291 13.9997 35.8541C11.9719 34.9792 10.208 33.7917 8.70801 32.2916C7.20801 30.7916 6.02051 29.0278 5.14551 27C4.27051 24.9722 3.83301 22.8055 3.83301 20.5C3.83301 18.1944 4.27051 16.0278 5.14551 14C6.02051 11.9722 7.20801 10.2083 8.70801 8.70831C10.208 7.20831 11.9719 6.02081 13.9997 5.14581C16.0275 4.27081 18.1941 3.83331 20.4997 3.83331C22.8052 3.83331 24.9719 4.27081 26.9997 5.14581C29.0275 6.02081 30.7913 7.20831 32.2913 8.70831C33.7913 10.2083 34.9788 11.9722 35.8538 14C36.7288 16.0278 37.1663 18.1944 37.1663 20.5C37.1663 22.8055 36.7288 24.9722 35.8538 27C34.9788 29.0278 33.7913 30.7916 32.2913 32.2916C30.7913 33.7917 29.0275 34.9792 26.9997 35.8541C24.9719 36.7291 22.8052 37.1666 20.4997 37.1666Z" />
                                </svg>
                            <?php endif; ?>
                        </div>
                        <label for="avatarContato" class="btn btn-primary text-small leading-small text-content-primary p-2 min-h-4 h-9 border-content-muted bg-secondary hover:bg-tertiary hover:border-primary cursor-pointer">
                            + Substituir foto
                            <input type="file" name="avatarContato" id="avatarContato" class="hidden" />
                        </label>
                    </div>
                    <div>
                        <label class="form-control">
                            <div class="label">
                                <span class="label-text text-label-medium text-content-primary">Nome</span>
                            </div>
                            <input
                                type="text"
                                name="nome"
                                value="<?= $contato->nome ?>"
                                placeholder="Nome do contato"
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
                    </div>
                    <div>
                        <label class="form-control">
                            <div class="label">
                                <span class="label-text text-label-medium text-content-primary">Categoria</span>
                            </div>
                            <select name="categoria" class="select bg-secondary border-primary text-content-placeholder w-full">
                                <?php switch (decrypt($contato->categoria)) {
                                    case 'Família': ?>
                                        <option selected>Família</option>
                                        <option>Amigo</option>
                                        <option>Trabalho</option>
                                        <option>Colega</option>
                                        <option>Conhecido</option>
                                    <?php break;
                                    case 'Amigo': ?>
                                        <option>Família</option>
                                        <option selected>Amigo</option>
                                        <option>Trabalho</option>
                                        <option>Colega</option>
                                        <option>Conhecido</option>
                                    <?php break;
                                    case 'Trabalho': ?>
                                        <option>Família</option>
                                        <option>Amigo</option>
                                        <option selected>Trabalho</option>
                                        <option>Colega</option>
                                        <option>Conhecido</option>
                                    <?php break;
                                    case 'Colega': ?>
                                        <option>Família</option>
                                        <option>Amigo</option>
                                        <option>Trabalho</option>
                                        <option selected>Colega</option>
                                        <option>Conhecido</option>
                                    <?php break;
                                    case 'Conhecido': ?>
                                        <option>Família</option>
                                        <option>Amigo</option>
                                        <option>Trabalho</option>
                                        <option>Colega</option>
                                        <option selected>Conhecido</option>
                                <?php break;
                                }
                                ?>
                            </select>
                        </label>
                    </div>
                    <div>
                        <label class="form-control">
                            <div class="label">
                                <span class="label-text text-label-medium text-content-primary">Telefone</span>
                            </div>
                            <input
                                type="text"
                                name="telefone"
                                value="<?= decrypt($contato->telefone) ?>"
                                placeholder="Número de telefone"
                                class="input bg-secondary border-primary text-content-placeholder w-full" />
                            <?php if (isset($validacoes['telefone'])) { ?>
                                <div class="label justify-start gap-1 text-xs text-medium leading-small text-red">
                                    <svg width="16" height="16" viewBox="0 0 24 24" class="fill-red" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 13.4L14.9 16.3C15.0833 16.4833 15.3167 16.575 15.6 16.575C15.8833 16.575 16.1167 16.4833 16.3 16.3C16.4833 16.1167 16.575 15.8833 16.575 15.6C16.575 15.3167 16.4833 15.0833 16.3 14.9L13.4 12L16.3 9.1C16.4833 8.91667 16.575 8.68333 16.575 8.4C16.575 8.11667 16.4833 7.88333 16.3 7.7C16.1167 7.51667 15.8833 7.425 15.6 7.425C15.3167 7.425 15.0833 7.51667 14.9 7.7L12 10.6L9.1 7.7C8.91667 7.51667 8.68333 7.425 8.4 7.425C8.11667 7.425 7.88333 7.51667 7.7 7.7C7.51667 7.88333 7.425 8.11667 7.425 8.4C7.425 8.68333 7.51667 8.91667 7.7 9.1L10.6 12L7.7 14.9C7.51667 15.0833 7.425 15.3167 7.425 15.6C7.425 15.8833 7.51667 16.1167 7.7 16.3C7.88333 16.4833 8.11667 16.575 8.4 16.575C8.68333 16.575 8.91667 16.4833 9.1 16.3L12 13.4ZM12 22C10.6167 22 9.31667 21.7375 8.1 21.2125C6.88333 20.6875 5.825 19.975 4.925 19.075C4.025 18.175 3.3125 17.1167 2.7875 15.9C2.2625 14.6833 2 13.3833 2 12C2 10.6167 2.2625 9.31667 2.7875 8.1C3.3125 6.88333 4.025 5.825 4.925 4.925C5.825 4.025 6.88333 3.3125 8.1 2.7875C9.31667 2.2625 10.6167 2 12 2C13.3833 2 14.6833 2.2625 15.9 2.7875C17.1167 3.3125 18.175 4.025 19.075 4.925C19.975 5.825 20.6875 6.88333 21.2125 8.1C21.7375 9.31667 22 10.6167 22 12C22 13.3833 21.7375 14.6833 21.2125 15.9C20.6875 17.1167 19.975 18.175 19.075 19.075C18.175 19.975 17.1167 20.6875 15.9 21.2125C14.6833 21.7375 13.3833 22 12 22Z" />
                                    </svg>
                                    <?= $validacoes['telefone'][0] ?>
                                </div>
                            <?php } ?>
                        </label>
                    </div>
                    <div>
                        <label class="form-control">
                            <div class="label">
                                <span class="label-text text-label-medium text-content-primary">E-mail</span>
                            </div>
                            <input
                                type="text"
                                name="email"
                                value="<?= decrypt($contato->email) ?>"
                                placeholder="E-mail do contato"
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
                    </div>
                </form>
                <div class="modal-action">
                    <button type="submit" form="form-atualizacao-<?= $contato->id ?>" class="btn btn-primary bg-brand border-brand text-content-inverse hover:bg-tertiary hover:text-content-primary hover:border-primary">Atualizar</button>
                </div>
            </div>
        </div>
    </div>
</dialog>