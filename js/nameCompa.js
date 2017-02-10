/**
 * Title:  Test Compatibilté des Prénom
 * Author: Mohamed Moughamir <hello@omnizya.com>
 * Copyright: KG-Com 2017
 */
var letters = {
    A: 1, J: 1, S: 1,
    B: 2, K: 2, T: 2,
    C: 3, L: 3, U: 3,
    D: 4, M: 4, V: 4,
    E: 5, N: 5, W: 5,
    F: 6, O: 6, X: 6,
    G: 7, P: 7, Y: 7,
    H: 8, Q: 8, Z: 8,
    I: 9, R: 9
},
    paths = {
        'one': 'Entre vous et <b>{{OTHER}}</b>, c’est tout feu tout flamme ! Votre couple est la somme de vos deux personnalités, fortes, indépendantes et capables de se réaliser soi-même. Pour que votre histoire fonctionne, vos deux caractères doivent se compléter et chacun doit fournir des efforts très particuliers. Votre relation avec <b>{{OTHER}}</b> est à prendre avec des pincettes, mais le jeu en vaut vraiment la chandelle. <b>{{USER}}</b>, c’est en prenant du recul que vous avancerez efficacement…',
        'two': 'A première vue, vous n’êtes pas vraiment faits pour vivre l’un avec l’autre. Mais votre volonté, combinée à celle de <b>{{OTHER}}</b>, attenue cette fausse impression. Tout est possible avec l’état d’esprit approprié! <b>{{USER}}</b>, allez-y pas à pas, en prenant soin de ne pas griller les étapes. Prenez le temps de réflexion nécessaire avant d’agir, sous peine de devoir faire face à bien des difficultés relationnelles.',
        'three': 'Votre couple avec <b>{{OTHER}}</b> est marqué par les blocages ! Vous manquez tout deux de souplesse d’esprit et de qualités d’adaptation. Ce qui va vous causer bien des ennuis dès que la première nouveauté ou la première instabilité va pointer le bout de son nez dans votre couple. Vous aimez la stabilité et vous pourriez aisément l’obtenir, à condition de surmonter tous ces blocages. Une chose facile à faire en soi, mais surtout très utile, car vous et {{OTHER}} pourriez être promis à un bel avenir…'
    },
    user = '{{USER}}',
    other = '{{OTHER}}',
    names = {},
    score = {},
    submit = $('.btn-submit'),
    person = [], path, mapObj;
var personOne, personTwo;

$(document).ready(function(){

    function capitalize(str) {
        return str.replace(/\w\S*/g, function(txt) {
            return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();
        });
    }

    function simpleScore(name) {
        var nameScore = 0;

        for (var i = 0; i < name.length; i++) {
            name = name.toUpperCase();

            var curChar = name.charAt(i);
            var curValue = letters[curChar];

            var nameScore = nameScore + curValue;
        }

        var singleDigitScore = nameScore;

        while (singleDigitScore >= 10) {
            var total = 0;
            var str = '' + singleDigitScore;
            for (var i = 0; i < str.length; i++) {
                total = total + parseInt(str.charAt(i));
            }
            singleDigitScore = total;
            score[name] = singleDigitScore;
        }
    }
    
    submit.on('click', function() {
        $(".step-1").addClass('hidden');
        $(".result").removeClass('hidden');
        $(".FormContainer").addClass('scale');
        $(".more").show();
    
        $(".name").each(function() {
            names[$(this).attr("name")] = $(this).val();
            person.push($(this).val()); // person[i]
            simpleScore(names[$(this).attr("name")]);
        });
        path = (score[names.prenom.toUpperCase()] + score[names.prenom.toUpperCase()]) / 2;

        mapObj = {
            "{{USER}}": names.prenom,
            "{{OTHER}}": names.conjoint
        };


        function between(x, min, max) {
            return x >= min && x <= max;
        }

        function findReplace(mapObj, text) {
            var re = new RegExp(Object.keys(mapObj).join("|"),"gi");
            text = text.replace(re, function(matched){
                return mapObj[matched];
            });

            var textArea = $('.result-text').text();
            textArea = $('.result-text').html(text);
        }
        
        if (between(path, 1, 3)) {
            findReplace(mapObj, paths.one);
        } else if (between(path, 4, 6)){
            findReplace(mapObj, paths.two);
        } else {
            findReplace(mapObj, paths.three);
        }
    });
});