<style>
    .cards {
  display: flex;
  flex-direction: row;
  gap: 15px;
}

.cards .red {
  background-color: #007e9e;
}

.cards .blue {
  background-color: #0062ff;
}

.cards .green {
  background-color: #18cd5e;
}

.cards .card {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  text-align: center;
  height: 200px;
  width: 300px;
  border-radius: 10px;
  color: white;
  cursor: pointer;
  transition: 400ms;
}

.cards .card p.tip {
  font-size: 3em;
  font-weight: 700;
}

.cards .card p.second-text {
  font-size: 1em;
}

.cards .card:hover {
  transform: scale(1.2, 1.2);
}

.cards:hover > .card:not(:hover) {
  filter: blur(10px);
  transform: scale(0.9, 0.9);
}
</style>
<div class="cards">
    <div class="card blue" onclick="window.location.href='/Recipes'">
        <p class="tip">Explore Recipes</p>
        <p class="second-text">Visit Bite-Hub</p>
    </div>

    <div class="card green" onclick="window.location.href='/HealthTools'">
        <p class="tip">Health <br>Tools</p>
        <p class="second-text">Try Our Health Tools</p>
    </div>
</div>