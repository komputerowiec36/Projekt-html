    var tab = [];
    var g = 0;
    var gra;
    var x = 1;
    var blad = 0;
    //document.getElementById('napis').value = [];
    function graj(pole, pl)
    {
        if (gra != 'skończona')
        {
            if (pl == 'pl1')
            {
                if (tab[pole] == null)
                {
                    blad = 0;
                    tab[pole] = pl;
                    document.getElementById('pp' + pole).style.display='block';
                    document.getElementById('napis').value = 'Rusza się komputer.';
                }
                else
                {
                    alert ('To pole jest już zaznaczone.');
                    blad = 1;
                    // musiałem ustawić taką zmienną (blad), by zablokować wykonanie
                    // funkcji dla gracza CPU, kiedy PLAYER1 kliknie w złe pole

                    document.getElementById('napis').value += '\nNieprawidłowy ruch (pole ' + pole + ').';
                }

                if ((tab[1] == 'pl1' && tab[2] == 'pl1' && tab[3] == 'pl1') ||
                    (tab[4] == 'pl1' && tab[5] == 'pl1' && tab[6] == 'pl1') ||
                    (tab[7] == 'pl1' && tab[8] == 'pl1' && tab[9] == 'pl1') ||
                    (tab[1] == 'pl1' && tab[5] == 'pl1' && tab[9] == 'pl1') ||
                    (tab[3] == 'pl1' && tab[5] == 'pl1' && tab[7] == 'pl1') ||
                    (tab[1] == 'pl1' && tab[4] == 'pl1' && tab[7] == 'pl1') ||
                    (tab[2] == 'pl1' && tab[5] == 'pl1' && tab[8] == 'pl1') ||
                    (tab[3] == 'pl1' && tab[6] == 'pl1' && tab[9] == 'pl1'))
                {
					document.getElementById("login").removeAttribute("hidden");
					document.getElementById('subm').disabled=true;
					document.getElementById('b1').style.display='block';
                    alert('Wygrałeś!!!');
                    document.getElementById('napis').value = '';
                    gra = 'skonczona';
                }
                else if (tab[1] != null && tab[2] != null && tab[3] != null &&
                         tab[4] != null && tab[5] != null && tab[6] != null &&
                         tab[7] != null && tab[8] != null && tab[9] != null)
                {
					document.getElementById("login1").removeAttribute("hidden");
					document.getElementById('b2').style.display='block';
                    alert ('REMIS');
                    gra = 'skończona';
                    document.getElementById('napis').value = '';
                }
                else
                {
                    if (tab[1] == null && (
                                            (tab[2] == 'cpu' && tab[3] == 'cpu') ||
                                            (tab[4] == 'cpu' && tab[7] == 'cpu') ||
                                            (tab[5] == 'cpu' && tab[9] == 'cpu')
                                          )
                        )
                    {
                        g = 1;
                    }
                    else if (tab[2] == null && (
                                                (tab[1] == 'cpu' && tab[3] == 'cpu') ||
                                                (tab[5] == 'cpu' && tab[8] == 'cpu')
                                               )
                            )
                    {
                        g = 2;
                    }
                    else if (tab[3] == null && (
                                                (tab[1] == 'cpu' && tab[2] == 'cpu') ||
                                                (tab[6] == 'cpu' && tab[9] == 'cpu') ||
                                                (tab[5] == 'cpu' && tab[7] == 'cpu')
                                               )
                            )
                    {
                        g = 3;
                    }
                    else if (tab[4] == null && (
                                                (tab[1] == 'cpu' && tab[7] == 'cpu') ||
                                                (tab[5] == 'cpu' && tab[6] == 'cpu')
                                               )
                            )
                    {
                        g = 4;
                    }
                    else if (tab[5] == null && (
                                                (tab[1] == 'cpu' && tab[9] == 'cpu') ||
                                                (tab[2] == 'cpu' && tab[8] == 'cpu') ||
                                                (tab[3] == 'cpu' && tab[7] == 'cpu') ||
                                                (tab[4] == 'cpu' && tab[6] == 'cpu')
                                               )
                            )
                    {
                        g = 5;
                    }
                    else if (tab[6] == null && (
                                                (tab[3] == 'cpu' && tab[9] == 'cpu') ||
                                                (tab[4] == 'cpu' && tab[5] == 'cpu')
                                               )
                            )
                    {
                        g = 6;
                    }
                    else if (tab[7] == null && (
                                                (tab[1] == 'cpu' && tab[4] == 'cpu') ||
                                                (tab[3] == 'cpu' && tab[5] == 'cpu') ||
                                                (tab[8] == 'cpu' && tab[9] == 'cpu')
                                               )
                            )
                    {
                        g = 7;
                    }
                    else if (tab[8] == null && (
                                                (tab[2] == 'cpu' && tab[5] == 'cpu') ||
                                                (tab[7] == 'cpu' && tab[9] == 'cpu')
                                               )
                            )
                    {
                        g = 8;
                    }
                    else if (tab[9] == null && (
                                                (tab[1] == 'cpu' && tab[5] == 'cpu') ||
                                                (tab[3] == 'cpu' && tab[6] == 'cpu') ||
                                                (tab[7] == 'cpu' && tab[8] == 'cpu')
                                               )
                            )
                    {
                        g = 9;
                    }

                    ///////////////////////////////////////////////////////

                    else if (tab[1] == null && (
                                                (tab[2] == 'pl1' && tab[3] == 'pl1') ||
                                                (tab[4] == 'pl1' && tab[7] == 'pl1') ||
                                                (tab[5] == 'pl1' && tab[9] == 'pl1')
                                               )
                        )
                    {
                        g = 1;
                    }
                    else if (tab[2] == null && (
                                                (tab[1] == 'pl1' && tab[3] == 'pl1') ||
                                                (tab[5] == 'pl1' && tab[8] == 'pl1')
                                               )
                            )
                    {
                        g = 2;
                    }
                    else if (tab[3] == null && (
                                                (tab[1] == 'pl1' && tab[2] == 'pl1') ||
                                                (tab[6] == 'pl1' && tab[9] == 'pl1') ||
                                                (tab[5] == 'pl1' && tab[7] == 'pl1')
                                               )
                            )
                    {
                        g = 3;
                    }
                    else if (tab[4] == null && (
                                                (tab[1] == 'pl1' && tab[7] == 'pl1') ||
                                                (tab[5] == 'pl1' && tab[6] == 'pl1')
                                               )
                            )
                    {
                        g = 4;
                    }
                    else if (tab[5] == null && (
                                                (tab[1] == 'pl1' && tab[9] == 'pl1') ||
                                                (tab[2] == 'pl1' && tab[8] == 'pl1') ||
                                                (tab[3] == 'pl1' && tab[7] == 'pl1') ||
                                                (tab[4] == 'pl1' && tab[6] == 'pl1')
                                               )
                            )
                    {
                        g = 5;
                    }
                    else if (tab[6] == null && (
                                                (tab[3] == 'pl1' && tab[9] == 'pl1') ||
                                                (tab[4] == 'pl1' && tab[5] == 'pl1')
                                               )
                            )
                    {
                        g = 6;
                    }
                    else if (tab[7] == null && (
                                                (tab[1] == 'pl1' && tab[4] == 'pl1') ||
                                                (tab[3] == 'pl1' && tab[5] == 'pl1') ||
                                                (tab[8] == 'pl1' && tab[9] == 'pl1')
                                               )
                            )
                    {
                        g = 7;
                    }
                    else if (tab[8] == null && (
                                                (tab[2] == 'pl1' && tab[5] == 'pl1') ||
                                                (tab[7] == 'pl1' && tab[9] == 'pl1')
                                               )
                            )
                    {
                        g = 8;
                    }
                    else if (tab[9] == null && (
                                                (tab[1] == 'pl1' && tab[5] == 'pl1') ||
                                                (tab[3] == 'pl1' && tab[6] == 'pl1') ||
                                                (tab[7] == 'pl1' && tab[8] == 'pl1')
                                               )
                            )
                    {
                        g = 9;
                    }
                    else
                    {
                        for (var i = 1; i <= 9; i++)
                        {
                            if (tab[i] == null)
                            {
                                g = i;
                                break;
                            }
                        }
                    }
                    
                    if (blad == 0)
                    {
                        graj(g, 'cpu');
                    }
                }
            }
            if (pl == 'cpu')
            {
                if (tab[pole] == null)
                {
                    blad = 0;
                    tab[pole] = pl;
                    document.getElementById('pp' + pole + pole).style.display='block';
                    document.getElementById('napis').value = 'Teraz Twój ruch.'
                }
                else
                {
                    alert ('To pole jest już zaznaczone.');
                    document.getElementById('napis').value += '\nNieprawidłowy ruch (pole ' + pole + ').';
                }

                if ((tab[1] == 'cpu' && tab[2] == 'cpu' && tab[3] == 'cpu') ||
                    (tab[4] == 'cpu' && tab[5] == 'cpu' && tab[6] == 'cpu') ||
                    (tab[7] == 'cpu' && tab[8] == 'cpu' && tab[9] == 'cpu') ||
                    (tab[1] == 'cpu' && tab[5] == 'cpu' && tab[9] == 'cpu') ||
                    (tab[3] == 'cpu' && tab[5] == 'cpu' && tab[7] == 'cpu') ||
                    (tab[1] == 'cpu' && tab[4] == 'cpu' && tab[7] == 'cpu') ||
                    (tab[2] == 'cpu' && tab[5] == 'cpu' && tab[8] == 'cpu') ||
                    (tab[3] == 'cpu' && tab[6] == 'cpu' && tab[9] == 'cpu'))
                {
					document.getElementById("login2").removeAttribute("hidden");
					document.getElementById('b3').style.display='block';
                    alert('Wygrał komputer.');
                    document.getElementById('napis').value = '';
                    gra = 'skończona';
                }
                else if (tab[1] != null && tab[2] != null && tab[3] != null &&
                         tab[4] != null && tab[5] != null && tab[6] != null &&
                         tab[7] != null && tab[8] != null && tab[9] != null)
                {
					document.getElementById("login1").removeAttribute("hidden");
					document.getElementById('b2').style.display='block';
                    alert ('REMIS');
                    gra = 'skończona';
                    document.getElementById('napis').value = "";

                }
            }
        }
    }
