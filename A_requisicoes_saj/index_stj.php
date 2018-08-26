<?php
 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL, 'https://ww2.stj.jus.br/processo/pesquisa/?aplicacao=processos.ea');
 //curl_setopt($ch, CURLOPT_PROXY, '192.168.3.1:3128');
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
 curl_setopt($ch, CURLOPT_HEADER, true);
 curl_setopt($ch, CURLOPT_REFERER, 'https://ww2.stj.jus.br/processo/pesquisa/?aplicacao=processos.ea');
 curl_setopt($ch, CURLOPT_POSTFIELDS, 'aplicacao=processos.ea&acao=pushconsultarprocessoconsultalimitenaoatendidasjaincluidas&descemail=&senha=&totalRegistrosPorPagina=40&tipoPesquisaSecundaria=&sequenciaisParteAdvogado=-1&refinamentoAdvogado=&refinamentoParte=&tipoOperacaoFonetica=&tipoOperacaoFoneticaPhonos=2&origemOrgaosSelecionados=&origemUFSelecionados=&julgadorOrgaoSelecionados=&tipoRamosDireitoSelecionados=&situacoesSelecionadas=&num_processo=&num_registro=&numeroUnico=0069660-67.2010.4.01.0000&numeroOriginario=&advogadoCodigo=&dataAutuacaoInicial=&dataAutuacaoFinal=&dataPublicacaoInicial=&dataPublicacaoFinal=&parteAutor=FALSE&parteReu=FALSE&parteOutros=FALSE&parteNome=&opcoesFoneticaPhonosParte=2&quantidadeMinimaTermosPresentesParte=1&advogadoNome=&opcoesFoneticaPhonosAdvogado=2&quantidadeMinimaTermosPresentesAdvogado=1&conectivo=OU&listarProcessosOrdemDescrecente=TRUE&listarProcessosOrdemDescrecenteTemp=TRUE&listarProcessosAtivosSomente=FALSE&listarProcessosEletronicosSomente=FALSE');
 $httpCode = curl_getinfo($ch , CURLINFO_HTTP_CODE);
 $response = curl_exec($ch);

 echo $response;
 ECHO 'TESTE';
?>