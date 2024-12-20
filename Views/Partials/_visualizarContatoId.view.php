<?php if (session()->get('mostrar')) : ?>
    <a href="/esconder" class="btn btn-primary text-small leading-small text-content-primary p-2 min-h-4 h-9 border-content-muted bg-secondary hover:bg-tertiary hover:border-primary">
        <svg width="12" height="17" viewBox="0 0 16 25" class="fill-white" xmlns="http://www.w3.org/2000/svg">
            <path d="M2 21C1.45 21 0.979167 20.8042 0.5875 20.4125C0.195833 20.0208 0 19.55 0 19V9C0 8.45 0.195833 7.97917 0.5875 7.5875C0.979167 7.19583 1.45 7 2 7H11V5C11 4.16667 10.7083 3.45833 10.125 2.875C9.54167 2.29167 8.83333 2 8 2C7.3 2 6.6875 2.2125 6.1625 2.6375C5.6375 3.0625 5.28333 3.59167 5.1 4.225C5.03333 4.45833 4.89583 4.64583 4.6875 4.7875C4.47917 4.92917 4.25 5 4 5C3.71667 5 3.47917 4.90833 3.2875 4.725C3.09583 4.54167 3.025 4.325 3.075 4.075C3.30833 2.925 3.88333 1.95833 4.8 1.175C5.71667 0.391667 6.78333 0 8 0C9.38333 0 10.5625 0.4875 11.5375 1.4625C12.5125 2.4375 13 3.61667 13 5V7H14C14.55 7 15.0208 7.19583 15.4125 7.5875C15.8042 7.97917 16 8.45 16 9V19C16 19.55 15.8042 20.0208 15.4125 20.4125C15.0208 20.8042 14.55 21 14 21H2ZM2 19H14V9H2V19ZM8 16C8.55 16 9.02083 15.8042 9.4125 15.4125C9.80417 15.0208 10 14.55 10 14C10 13.45 9.80417 12.9792 9.4125 12.5875C9.02083 12.1958 8.55 12 8 12C7.45 12 6.97917 12.1958 6.5875 12.5875C6.19583 12.9792 6 13.45 6 14C6 14.55 6.19583 15.0208 6.5875 15.4125C6.97917 15.8042 7.45 16 8 16Z" />
        </svg>
    </a>
<?php else: ?>
    <button class="btn btn-primary text-small leading-small text-content-primary p-2 min-h-4 h-9 border-content-muted bg-secondary hover:bg-tertiary hover:border-primary" onclick="modal_view_<?= $contato->id ?>.showModal()">
        <svg width="16" height="17" viewBox="0 0 16 17" class="fill-white" xmlns="http://www.w3.org/2000/svg">
            <path d="M3.99984 15.1667C3.63317 15.1667 3.31928 15.0361 3.05817 14.775C2.79706 14.5139 2.6665 14.2 2.6665 13.8333V7.16666C2.6665 6.79999 2.79706 6.4861 3.05817 6.22499C3.31928 5.96388 3.63317 5.83332 3.99984 5.83332H4.6665V4.49999C4.6665 3.57777 4.9915 2.79166 5.6415 2.14166C6.2915 1.49166 7.07761 1.16666 7.99984 1.16666C8.92206 1.16666 9.70817 1.49166 10.3582 2.14166C11.0082 2.79166 11.3332 3.57777 11.3332 4.49999V5.83332H11.9998C12.3665 5.83332 12.6804 5.96388 12.9415 6.22499C13.2026 6.4861 13.3332 6.79999 13.3332 7.16666V13.8333C13.3332 14.2 13.2026 14.5139 12.9415 14.775C12.6804 15.0361 12.3665 15.1667 11.9998 15.1667H3.99984ZM3.99984 13.8333H11.9998V7.16666H3.99984V13.8333ZM7.99984 11.8333C8.3665 11.8333 8.68039 11.7028 8.9415 11.4417C9.20261 11.1805 9.33317 10.8667 9.33317 10.5C9.33317 10.1333 9.20261 9.81943 8.9415 9.55832C8.68039 9.29721 8.3665 9.16666 7.99984 9.16666C7.63317 9.16666 7.31928 9.29721 7.05817 9.55832C6.79706 9.81943 6.6665 10.1333 6.6665 10.5C6.6665 10.8667 6.79706 11.1805 7.05817 11.4417C7.31928 11.7028 7.63317 11.8333 7.99984 11.8333ZM5.99984 5.83332H9.99984V4.49999C9.99984 3.94443 9.80539 3.47221 9.4165 3.08332C9.02761 2.69443 8.55539 2.49999 7.99984 2.49999C7.44428 2.49999 6.97206 2.69443 6.58317 3.08332C6.19428 3.47221 5.99984 3.94443 5.99984 4.49999V5.83332Z" />
        </svg>
    </button>
<?php endif; ?>

<dialog id="modal_view_<?= $contato->id ?>" class="modal modal-bottom sm:modal-middle bg-content-primary/20">
    <div class="modal-box bg-primary bg-opacity-80">
        <div class="flex flex-col gap-1">
            <div>
                <form method="dialog">
                    <button class="btn btn-circle btn-ghost absolute right-2 top-2">✕</button>
                </form>
                <p class="text-heading leading-heading text-content-primary font-bold">Visualizar informações</p>
            </div>
            <div class="flex flex-col px-4 py-5 gap-4">
                <form action="/mostrar" method="post">
                    <div>
                        <label class="form-control">
                            <div class="label">
                                <span class="label-text text-label-medium text-content-primary">Senha</span>
                            </div>
                            <input
                                type="password"
                                name="senha"
                                placeholder="Digite sua senha"
                                class="input bg-secondary border-primary text-content-placeholder w-full" />
                            <?php if (isset($validacoes['senha'])) { ?>
                                <div class="label justify-start gap-1 text-xs text-medium leading-small text-red">
                                    <svg width="16" height="16" viewBox="0 0 24 24" class="fill-red" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 13.4L14.9 16.3C15.0833 16.4833 15.3167 16.575 15.6 16.575C15.8833 16.575 16.1167 16.4833 16.3 16.3C16.4833 16.1167 16.575 15.8833 16.575 15.6C16.575 15.3167 16.4833 15.0833 16.3 14.9L13.4 12L16.3 9.1C16.4833 8.91667 16.575 8.68333 16.575 8.4C16.575 8.11667 16.4833 7.88333 16.3 7.7C16.1167 7.51667 15.8833 7.425 15.6 7.425C15.3167 7.425 15.0833 7.51667 14.9 7.7L12 10.6L9.1 7.7C8.91667 7.51667 8.68333 7.425 8.4 7.425C8.11667 7.425 7.88333 7.51667 7.7 7.7C7.51667 7.88333 7.425 8.11667 7.425 8.4C7.425 8.68333 7.51667 8.91667 7.7 9.1L10.6 12L7.7 14.9C7.51667 15.0833 7.425 15.3167 7.425 15.6C7.425 15.8833 7.51667 16.1167 7.7 16.3C7.88333 16.4833 8.11667 16.575 8.4 16.575C8.68333 16.575 8.91667 16.4833 9.1 16.3L12 13.4ZM12 22C10.6167 22 9.31667 21.7375 8.1 21.2125C6.88333 20.6875 5.825 19.975 4.925 19.075C4.025 18.175 3.3125 17.1167 2.7875 15.9C2.2625 14.6833 2 13.3833 2 12C2 10.6167 2.2625 9.31667 2.7875 8.1C3.3125 6.88333 4.025 5.825 4.925 4.925C5.825 4.025 6.88333 3.3125 8.1 2.7875C9.31667 2.2625 10.6167 2 12 2C13.3833 2 14.6833 2.2625 15.9 2.7875C17.1167 3.3125 18.175 4.025 19.075 4.925C19.975 5.825 20.6875 6.88333 21.2125 8.1C21.7375 9.31667 22 10.6167 22 12C22 13.3833 21.7375 14.6833 21.2125 15.9C20.6875 17.1167 19.975 18.175 19.075 19.075C18.175 19.975 17.1167 20.6875 15.9 21.2125C14.6833 21.7375 13.3833 22 12 22Z" />
                                    </svg>
                                    <?= $validacoes['senha'][0] ?>
                                </div>
                            <?php } ?>
                        </label>
                    </div>
                    <div class="modal-action">
                        <button type="reset" class="btn btn-primary bg-tertiary border-0 text-content-primary hover:bg-content-placeholder">Limpar</button>
                        <button type="submit" class="btn btn-primary bg-brand border-brand text-content-inverse hover:bg-tertiary hover:text-content-primary hover:border-primary">Confirmar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</dialog>