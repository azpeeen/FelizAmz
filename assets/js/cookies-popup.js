window.addEventListener("load", function () {
    initCookieConsent().run({
        current_lang: "pt-br",
        autoclear_cookies: !0,
        page_scripts: !0,
        onFirstAction: function (e, o) { },
        onAccept: function (e) { },
        onChange: function (e, o) { },
        languages: {
            "pt-br": {
                consent_modal: {
                    title: "Usamos cookies!",
                    description:
                        'Ol\xe1, este site usa cookies essenciais para garantir seu bom funcionamento e cookies de rastreamento para entender como voc\xea interage com ele. Este \xfaltimo ser\xe1 definido somente ap\xf3s o consentimento. <button type="button" data-cc="c-settings" class="cc-link">Deixe-me escolher</button>',
                    primary_btn: { text: "Aceitar tudo", role: "accept_all" },
                    secondary_btn: { text: "Rejeitar tudo", role: "accept_necessary" },
                },
                settings_modal: {
                    title: "Prefer\xeancias de cookies",
                    save_settings_btn: "Salvar configura\xe7\xf5es",
                    accept_all_btn: "Aceitar tudo",
                    reject_all_btn: "Rejeitar tudo",
                    close_btn_label: "Close",
                    cookie_table_headers: [{ col1: "Nome" }, { col2: "Dominio" }, { col3: "Expira\xe7\xe3o" }, { col4: "Descri\xe7\xe3o" }],
                    blocks: [
                        {
                            title: "Uso de cookies \uD83D\uDCE2",
                            description:
                                'Eu uso cookies para garantir as funcionalidades b\xe1sicas do site e melhorar sua experi\xeancia online. Voc\xea pode escolher cada categoria para ativar/desativar sempre que quiser. Para obter mais detalhes sobre cookies e outros dados confidenciais, leia a \xedntegra <a href="assets/pdf/politica-de-privacidade.pdf" class="cc-link" target="_blank">pol\xedtica de privacidade</a>.',
                        },
                        {
                            title: "Cookies estritamente necess\xe1rios",
                            description: "Esses cookies s\xe3o essenciais para o bom funcionamento do meu site. Sem esses cookies, o site n\xe3o funcionaria corretamente",
                            toggle: { value: "necessary", enabled: !0, readonly: !0 },
                        },
                        {
                            title: "Cookies de desempenho e an\xe1lise",
                            description: "Esses cookies permitem que o site se lembre das escolhas que voc\xea fez no passado",
                            toggle: { value: "analytics", enabled: !1, readonly: !1 },
                            cookie_table: [
                                { col1: "^_ga", col2: "google.com", col3: "2 years", col4: "description ...", is_regex: !0 },
                                { col1: "_gid", col2: "google.com", col3: "1 day", col4: "description ..." },
                            ],
                        },
                        {
                            title: "Cookies de publicidade e segmenta\xe7\xe3o",
                            description:
                                "Esses cookies coletam informa\xe7\xf5es sobre como voc\xea usa o site, quais p\xe1ginas voc\xea visitou e quais links voc\xea clicou. Todos os dados s\xe3o anonimizados e n\xe3o podem ser usados para identific\xe1-lo",
                            toggle: { value: "targeting", enabled: !1, readonly: !1 },
                        },
                        { title: "Mais Informa\xe7\xf5es", description: 'Para quaisquer d\xfavidas em rela\xe7\xe3o \xe0 nossa pol\xedtica de cookies e suas escolhas, por favor <a class="cc-link" href="contato" target="blank">Contate-Nos.</a>.' },
                    ],
                },
            },
        },
    });
});
