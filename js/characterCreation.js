        var heroClass = document.getElementsByClassName("class-select");
        var heroClassValue = 0;
            
            //When we click on slayer
            heroClass[0].addEventListener("click", function()
            { 
                heroClassValue = 0;
                classContent();
                                    
            });
            
            //When we click on thief
            heroClass[1].addEventListener("click", function()
            { 
                heroClassValue = 1;
                classContent();
                                    
            });

            //When we click on thief
            heroClass[2].addEventListener("click", function()
            { 
                heroClassValue = 2;
                classContent();
                                    
            });

            //When we click on thief
            heroClass[3].addEventListener("click", function()
            { 
                heroClassValue = 3;
                classContent();
                                    
            });
            
            //Change the content on the create class interface
            function classContent(){
                var classTitle = document.getElementById("class-title");
                var classDescription = document.getElementById("class-description");
                
                //change content 
                if(heroClassValue ==0){
                    classTitle.innerHTML = "Demon Slayer";
                    classDescription.innerHTML = "Born from a bloodline of warriors, you start with high health and decent damage.";
                    
                }
                else if(heroClassValue ==1){
                    classTitle.innerHTML = "Blood Thief";
                    classDescription.innerHTML = "Insane and thirsty, you feast off your demons to heal your wounds. You start with an extra potions and money.";
                }
                
                else if(heroClassValue ==2){
                    classTitle.innerHTML = "Hell Mage";
                    classDescription.innerHTML = "A powerful mage capable of casting spells to diminish demons. You deal high damage. ";
                }
                
                else if(heroClassValue ==3){
                    classTitle.innerHTML = "Blessed Soul";
                    classDescription.innerHTML = "Baptized by the cathedral of souls, you have the chance to deal critical damage to demons"
                }
            }