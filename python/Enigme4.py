#
#La suite de Syracuse est définie comme suit : on part d'un nombre entier strictement positif k ; 
#s’il est pair, on le divise par 2 ; s’il est impair, on le multiplie par 3 et on ajoute 1 au résultat. 
#On répète l’opération pour obtenir la suite de Syracuse de source k. 
#Sur l'image sont représentés tous les éléments de la suite de Syracuse de source 27. Elle culmine à 9232. 



Inp=0
List=[0] #variable servant à stocker le résultat

"""

Inp=int(input("Entrez un nombre entier positif\n"))

J'avais mis cette ligne pour faire des tests quand j'écrivais l'algo

"""

for Inp in range(2,10000):
	while Inp!=1: #Si k retombe à 1 la chaine se repete undéfiniment
		if Inp%2 == 0:
			Inp=Inp//2
			if List[0]<Inp:
				List[0]=Inp

			

		elif Inp%2 == 1:
			Inp=Inp*3+1
			if List[0]<Inp:
				List[0]=Inp

print(List[0])
