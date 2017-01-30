# 2 576 980 377 524 décimales de pi
# format A4 = 21 * 29,7
# volume m3 d'une rame = 0.21 * 0.297 * 0.05 = 0,0031185
#500 feuilles par rame
# nombre de ligne par page = 70
# nombre char par ligne = 80


Pi=2576980377524
NbCharP=80*70 #nombre caractères par pages
NbCharF=NbCharP*2 #nombre caractères par feuilles

print(NbCharF)
print((Pi/NbCharF)/500)
NbCharR=NbCharF*500 #nombre de caractères par rame
print(NbCharR)

NbR=Pi/NbCharR #nombre total de rames
print(NbR)

VtR=NbR*0.0031185 #volume total 
print(int(VtR))
