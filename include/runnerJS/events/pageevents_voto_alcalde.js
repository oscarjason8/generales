
Runner.pages.PageSettings.addPageEvent('voto_alcalde',Runner.pages.constants.PAGE_ADD,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){var c1=Runner.getControl(pageid,'candidato1');var c2=Runner.getControl(pageid,'candidato2');var c3=Runner.getControl(pageid,'candidato3');var c4=Runner.getControl(pageid,'candidato4');var c5=Runner.getControl(pageid,'candidato5');var c6=Runner.getControl(pageid,'candidato6');var c7=Runner.getControl(pageid,'candidato7');var c8=Runner.getControl(pageid,'candidato8');var c9=Runner.getControl(pageid,'candidato9');var c10=Runner.getControl(pageid,'candidato10');var c11=Runner.getControl(pageid,'candidato11');var c12=Runner.getControl(pageid,'candidato12');var validos=Runner.getControl(pageid,'validos');var blancos=Runner.getControl(pageid,'blancos');var nulos=Runner.getControl(pageid,'nulos');var utilizados=Runner.getControl(pageid,'utilizados');var no_utilizados=Runner.getControl(pageid,'no_utilizados');var total=Runner.getControl(pageid,'total');function fcalc(){validos.setValue(Number(c1.getValue())+Number(c2.getValue())+Number(c3.getValue())+Number(c4.getValue())
+Number(c5.getValue())+Number(c6.getValue())+Number(c7.getValue())+Number(c8.getValue())+Number(c9.getValue())
+Number(c10.getValue())+Number(c11.getValue())+Number(c12.getValue()));utilizados.setValue(Number(validos.getValue())+Number(blancos.getValue())+Number(nulos.getValue()));total.setValue(Number(utilizados.getValue())+Number(no_utilizados.getValue()));}
validos.makeReadonly();c1.on('change',fcalc);c2.on('change',fcalc);c3.on('change',fcalc);c4.on('change',fcalc);c5.on('change',fcalc);c6.on('change',fcalc);c7.on('change',fcalc);c8.on('change',fcalc);c9.on('change',fcalc);c10.on('change',fcalc);c11.on('change',fcalc);c12.on('change',fcalc);utilizados.makeReadonly();validos.on('change',fcalc);blancos.on('change',fcalc);nulos.on('change',fcalc);total.makeReadonly();utilizados.on('change',fcalc);no_utilizados.on('change',fcalc);;});Runner.pages.PageSettings.addPageEvent('voto_alcalde',Runner.pages.constants.PAGE_EDIT,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){var urna=Runner.getControl(pageid,'id_urna');var c1=Runner.getControl(pageid,'candidato1');var c2=Runner.getControl(pageid,'candidato2');var c3=Runner.getControl(pageid,'candidato3');var c4=Runner.getControl(pageid,'candidato4');var c5=Runner.getControl(pageid,'candidato5');var c6=Runner.getControl(pageid,'candidato6');var c7=Runner.getControl(pageid,'candidato7');var c8=Runner.getControl(pageid,'candidato8');var c9=Runner.getControl(pageid,'candidato9');var c10=Runner.getControl(pageid,'candidato10');var c11=Runner.getControl(pageid,'candidato11');var c12=Runner.getControl(pageid,'candidato12');var validos=Runner.getControl(pageid,'validos');var blancos=Runner.getControl(pageid,'blancos');var nulos=Runner.getControl(pageid,'nulos');var utilizados=Runner.getControl(pageid,'utilizados');var no_utilizados=Runner.getControl(pageid,'no_utilizados');var total=Runner.getControl(pageid,'total');function fcalc(){validos.setValue(Number(c1.getValue())+Number(c2.getValue())+Number(c3.getValue())+Number(c4.getValue())
+Number(c5.getValue())+Number(c6.getValue())+Number(c7.getValue())+Number(c8.getValue())+Number(c9.getValue())
+Number(c10.getValue())+Number(c11.getValue())+Number(c12.getValue()));utilizados.setValue(Number(validos.getValue())+Number(blancos.getValue())+Number(nulos.getValue()));total.setValue(Number(utilizados.getValue())+Number(no_utilizados.getValue()));}
validos.makeReadonly();c1.on('change',fcalc);c2.on('change',fcalc);c3.on('change',fcalc);c4.on('change',fcalc);c5.on('change',fcalc);c6.on('change',fcalc);c7.on('change',fcalc);c8.on('change',fcalc);c9.on('change',fcalc);c10.on('change',fcalc);c11.on('change',fcalc);c12.on('change',fcalc);urna.makeReadonly();utilizados.makeReadonly();validos.on('change',fcalc);blancos.on('change',fcalc);nulos.on('change',fcalc);total.makeReadonly();utilizados.on('change',fcalc);no_utilizados.on('change',fcalc);;});